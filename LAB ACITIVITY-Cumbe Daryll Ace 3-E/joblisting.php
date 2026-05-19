<?php
$listings = [
    [
        'id' => 1,
        'title' => 'Software Engineer',
        'description' => 'We are seeking a super duper skilled Software Engineer that can easily code hehe.',
        'salary' => 30000,
        'location' => 'Hulo Street',
        'tags' => ['Java', 'Laravel', 'PHP'],
    ],
    [
        'id' => 2,
        'title' => 'Frontend Developer',
        'description' => 'Looking for a UI-focused developer with Tailwind experience.',
        'salary' => 28000,
        'location' => 'Japan',
        'tags' => ['JavaScript', 'React', 'Tailwind'],
    ],
    [
        'id' => 3,
        'title' => 'Backend Developer',
        'description' => 'PHP/Laravel experience preferred for API development.',
        'salary' => 32000,
        'location' => 'Bukot',
        'tags' => ['PHP', 'Laravel', 'MySQL'],
    ],
    [
        'id' => 4,
        'title' => 'Fullstack Engineer',
        'description' => 'Comfortable across frontend and backend technologies.',
        'salary' => 35000,
        'location' => 'Hulo Street',
        'tags' => ['JavaScript', 'PHP', 'SQL'],
    ],
    [
        'id' => 5,
        'title' => 'DevOps Engineer',
        'description' => 'Experience with CI/CD and cloud deployments.',
        'salary' => 36000,
        'location' => 'Hulo Street',
        'tags' => ['Docker', 'CI/CD', 'AWS'],
    ],
];

//ternary Operator

//null collectiong operator
// ?? checks if the variable is null

//camel case

function sayHEllo($name, $age)
{
    echo "Hello, $name! You are $age yearsold.";
}
sayHello("Ace", 21);

function add($a, $b)
{
    return $a + $b;
}
$result = add(5, 3);
echo "<br>";
echo $result;

/*
//scope of variable
//bad code
function testing()
{
    global $y;
}
echo $y;
*/

//splat operator ... w/3dots
function sum(...$numbers) //if may same function ay need palitan
{
    return array_sum($numbers);
}
echo "<br>";
echo add(1, 2, 3, 4);

//constant cannot be change or const
//2 way to declare a const in php
//define()
define("SITE_NAME", "CICT");
echo "<br>";
echo SITE_NAME;

const TAX_RATE = 0.12;
echo "<br>";
echo TAX_RATE;




function formatSalary($salary) {}
$formatSalary = fn($salary) => '$' . number_format($salary, 2); //arrowfunction
/*
{
    return '$' . number_format($salary, 2);
}
*/
//anonymous function
$add = function ($a, $b) {
    return $a + $b;
};


//$add = fn($a, $b) => $a + $b;

$hello = function () {
    echo "Hello";
};
echo "<br>";
$hello();

//callback

function run($greet)
{
    $greet();
}
echo "<br>";
run($hello);

$kaibigan = "Ace";
echo "<br>";
$kamusta = function () use ($kaibigan) {
    echo "kamusta ka $kaibigan";
};
$kamusta();

//named function pag ka may pangalan (pagka laging gagamitin)
//anonymous(pagka hndi ganong ginagamit)
//arrow function pagka need na shortcut ang function (pagka helperfunction)

//oop

function filterByLocation($listings, $location)
{
    return array_filter($listings, function ($job) use ($location) {
        return strcasecmp($job['location'], $location) === 0;
    });
}

if (isset($_GET['location'])) {
    $location   = $_GET['location'];
    $listings = filterByLocation($listings, $location);
} else {
    $filteredLocation = $listings;
}


?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Job Listings</title>
</head>

<body class="bg-red-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">Job Listings</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <!-- Output -->
        <?php foreach ($listings as $index => $job): ?>
            <div class="<?php if ($index % 2 === 0) : ?>bg-violet-500<?php else : ?>bg-white-500<?php endif; ?> rounded-lg shadow-md my-4">
                <div class="p-4">
                    <h2 class="text-xl font-semibold"><?= htmlspecialchars($job['title']) ?></h2>
                    <p class="text-gray-700 text-lg mt-2"><?= htmlspecialchars($job['description']) ?></p>
                    <ul class="mt-4">
                        <li class="mb-2">
                            <strong>Salary:</strong> <?= formatsalary($job['salary']) ?>
                        </li>
                        <li class="mb-2">
                            <strong>Location:</strong> <?= htmlspecialchars($job['location']) ?>
                        </li>
                        <li class="mb-2">
                            <strong>Tags:</strong> <?= htmlspecialchars(implode(', ', $job['tags'])) ?>
                        </li>
                    </ul>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>