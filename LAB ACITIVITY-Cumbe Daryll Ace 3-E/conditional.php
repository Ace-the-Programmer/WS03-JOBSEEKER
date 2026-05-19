<?php
$isLoggedIn = true;
$name = Null;
/*$age = 21;
if ($age >= 210) {
    echo "You can vote & drink";
} else if ($age >= 18) {
    echo "You can vote";
} else {
    echo "You Cannot vote";
}
*/

// == equal to 
// === identical to
// != not equal to
// <> not equal to
// !== not identical to
// < less than
// > greater than
// <= less than or equal to
// >= greater than or equal to

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHP</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">PHP</h1>
        </div>
    </header>

    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
            <!-- Output -->
            <?php if ($isLoggedIn): ?>
                <?php if (isset($name)): ?>
                    Welcome, <?= $name ?>
                <?php else : ?>
                    Welcome
                <?php endif; ?>
            <?php else : ?>
                <h1 class="text-3xl">Parang awa mona mag log-in ka!</h1>
            <?php endif; ?>


            <?php if ($isLoggedIn && $name): ?>
                Welcome, <?= $name  ?>
            <?php elseif ($isLoggedIn) : ?>
                Welcome Ace
            <?php else : ?>
                <h1 class="text-3xl">Parang awa mona mag log-in ka!</h1>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>