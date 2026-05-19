<?php
date_default_timezone_set('Asia/Manila');
$output = Null;
// Sample PHP output variable
$output = "Hello from PHP!";
$awtpot = "Hallo Ace";
$ids = [10, 22, 15, 67, 45];
$users = ['user', 'user2', 'user3'];
$atput = count($ids); // Counts the number of elements in the array
sort($ids); // Sorts array in ascending order
rsort($ids); // Sorts array in descending order
array_push($ids, 100); // Adds element to the end of array
array_pop($ids); // Removes element from the end of array
array_shift($ids); // Removes element from the beginning of array
array_unshift($ids, 67); // Adds element to the beginning of array
$ids2 = array_slice($ids, 2, 3); // Extracts a slice of the array (starting at index 2, length 3)
array_splice($ids, 1, 1, 'new user'); // Removes portion of array and optionally replaces it
$output = 'Sum if array ids:' . array_sum($ids);
$output = "User 2 is at index:" . array_search('user2', $users);
$output = "User 3 exist:" . in_array('user3', $users);
$ouput = null;
$tags = 'Tubero , Patintero, Bisayawa, Jacob';
$tagsArray = explode(', ', $tags);
//$output = date('h = i:5 a');
$output = date('F/d/Y h = i:5 a');
//iteration

//. dot is a concatination
//count
//sort
//rsort
//array_push($ids,100);
var_dump($tagsArray);
var_dump($ids2);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Array Functions</title>
</head>

<body class="bg-gray-100">

    <!-- Header -->
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">PHP</h1>
        </div>
    </header>

    <!-- Content -->
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">

            <!-- Output -->

            <p class="text-xl">
                <?= $output ?>

            </p>

            <h2 class="text-xl font-semibold my-4">IDs Array</h2>
            <p><?php print_r($ids); ?></p>
            <p><?php print_r($atput); ?></p>
            <p><?php print_r($users); ?></p>
            <p><?php print_r($users); ?> </p>

            <p>
                <?= $awtpot ?><!-- You can echo array values here later -->
            </p>

        </div>
    </div>

</body>

</html>