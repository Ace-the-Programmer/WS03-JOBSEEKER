<?php

class Router
{
    protected $routes = [];

    public function registerRoute($method, $uri, $controller)
    {
        $this->routes[] = [
            'method' => $method,
            'uri' => $uri,
            'controller' => $controller
        ];
    }

    /**
     * Add GET route
     * 
     * @param string $uri
     * @param string @controller
     * @return void
     */
    public function get($uri, $controller)
    {
        $this->registerRoute('GET', $uri, $controller);
    }

    /**
     * Add POST route
     * 
     * @param string $uri
     * @param string @controller
     * @return void
     */
    public function post($uri, $controller)
    {
        $this->registerRoute('POST', $uri, $controller);
    }

    /**
     * Add PUT route
     * 
     * @param string $uri
     * @param string @controller
     * @return void
     */
    public function put($uri, $controller)
    {
        $this->registerRoute('PUT', $uri, $controller);
    }

    /**
     * Add DELETE route
     * 
     * @param string $uri
     * @param string @controller
     * @return void
     */
    public function delete($uri, $controller)
    {
        $this->registerRoute('DELETE', $uri, $controller);
    }

    /**
     * Load error page
     * 
     * @param int $httpCode
     * @return void
     */
    public function error($httpCode = 404)
    {
        http_response_code($httpCode);
        loadView("error/{$httpCode}");
        exit;
    }

    /**
     * Route the request
     * 
     * @param string $uri
     * @param string $method
     * @return void
     */
    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {

            // Split the current URI into segments
            $uriSegments = explode('/', trim($uri, '/'));

            // Split the route URI into segments
            $routeSegments = explode('/', trim($route['uri'], '/'));

            $match = true;

            // Check if the number of segments matches
            if (count($uriSegments) === count($routeSegments) && $route['method'] === strtoupper($method)) {
                $params = [];

                for ($i = 0; $i < count($uriSegments); $i++) {
                    // If the segments do not match and it's not a placeholder
                    if ($routeSegments[$i] !== $uriSegments[$i] && !str_starts_with($routeSegments[$i], ':')) {
                        $match = false;
                        break;
                    }

                    // Check for a placeholder and add to $params
                    if (str_starts_with($routeSegments[$i], ':')) {
                        $params[substr($routeSegments[$i], 1)] = $uriSegments[$i];
                    }
                }

                if ($match) {
                    foreach ($params as $key => $value) {
                        $_GET[$key] = $value;
                    }

                    require basePath($route['controller']);
                    return;
                }
            }
        }

        $this->error();
    }
}
