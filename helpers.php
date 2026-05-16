<?php

/**
 * Get the base path
 * 
 * @param string $path
 * @return string
 */
function basePath($path = '')
{
    return __DIR__ . '/' . $path;
}

/**
 * Load view
 * 
 * @param string $name
 * @param array $data
 * @return void
 */
function loadView($name, $data = [])
{
    $viewPath = basePath("App/views/{$name}.view.php");

    if (file_exists($viewPath)) {
        extract($data);
        require $viewPath;
    } else {
        echo "View {$name} not found!";
    }
}

/**
 * Load partials
 * 
 * @param string $name
 * @return void
 */
function loadPartial($name)
{
    $partialPath = basePath("App/views/partials/{$name}.php");

    if (file_exists($partialPath)) {
        require $partialPath;
    } else {
        echo "Partial {$name} not found";
    }
}

/**
 * Inspect a value
 * 
 * @param mixed $value
 * @return void
 */
function inspect($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

/**
 * Format salary
 * 
 * @param string $salary
 * @return string
 */
function formatSalary($salary)
{
    return '$' . number_format(floatval($salary));
}

/**
 * Strip the Laragon subdirectory prefix from REQUEST_URI so route
 * matching works whether the app lives at / or /ws03/.
 *
 * @param string $uri  Raw $_SERVER['REQUEST_URI']
 * @return string      Clean URI e.g. "/" or "/listings"
 */
function normaliseUri($uri)
{
    // Remove query string
    $uri = strtok($uri, '?');

    // Remove subdirectory prefix (e.g. /ws03/public → strip /ws03/public)
    $base = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');
    if ($base !== '' && strpos($uri, $base) === 0) {
        $uri = substr($uri, strlen($base));
    }

    return ($uri === '' || $uri === false) ? '/' : $uri;
}
function inspectAndDie($value)
{
    echo '<pre>';
    die(var_dump($value));
    echo '</pre>';
}

/**
 * Sanitize Data
 *
 * @param string $dirty
 * @return string
 */
function sanitize($dirty)
{
    return filter_var(trim($dirty), FILTER_SANITIZE_SPECIAL_CHARS);
}

/**
 * Redirect to a given url
 *
 * @param string $url
 * @return void
 */
function redirect($url)
{
    header("Location: {$url}");
    exit;
}
