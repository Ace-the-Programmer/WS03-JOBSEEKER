<?php
echo 'Hello, World!', 'Ace'; //print for multiple text/line
echo '<br>';
print 'Kamusta PHP'; //print for single line
$firstName = 'Ace';
$last_Name = 'Ace';
$title = 'PHP';
$body = 'Love me not';
$heading = 'Ace Cumbe';
$fullName = $firstName . '' . $last_Name;
"Hello my name is  $fullName"; //double quote is for string interpolation
$Age = 21;
$num1 = 5;
$num2 = 200;
$num3 = '10';
$prutas = 'banana';
date_default_timezone_set('Asia/Manila');
$output = Null;
//$Name = ['']array
echo '<br>';
//$result = $num3 + $num2;juggling
$result = (string) $num2; //implicit type casting
//assignment operator
//math functions
//abs() absolute value
//round()
//ceil() rround up
//floor() rround down
//sqrt()
//pow()power
//max() highest value
//min() lowest value
//rand() random number
//mt_rand() pagka madaming irrandom
//array
$names = array(1, 2, 3,);
$names = [1, 2, 3,];
$student = [
    'name' => 'Ace',
    'age' => 21,
    'email' => 'ace@gmail.com'
];
echo $student['email'];
//muti dimensional array is like an array
//multi dimensional array
$students = [
    [
        'name' => 'Matthew',
        'age' => 21,
        'email' => 'matthew@gmail.com'
    ],
    [
        'name' => 'Juan',
        'age' => 22,
        'email' => 'juan@gmail.com'
    ],
    [
        'name' => 'Pedro',
        'age' => 23,
        'email' => 'pedro   @gmail.com'
    ]
];
echo '<br />';
echo $students[1]['email'];
$output = date('d');
var_dump($result);

//loosely typed language

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?= $title; ?></title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">WS03</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-semibold mb-4"><?= $heading ?></h2>
            <p>In this subject, you will learn the fundamentals of the PHP language</p>
        </div>
    </div>
</body>

</html>