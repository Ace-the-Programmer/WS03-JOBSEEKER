<?php
//pascal case (dalawang malaki ang first letter ng class) 
class Student
//object - instance class
//method - function class

{
    public $name; //data
    public function greet()
    {

        return "Hello My Name is " . $this->name;
    }
}

$studentCICT1 = new Student();
$studentCICT1->name = "Ace";

$studentCICT2 = new Student();
$studentCICT2->name = "Stormytree3310";
// object - instance class 
// method - Function Class 


class Person
{
    public $personName;
    public function __construct($personName)
    {
        $this->personName = $personName;
        echo "object created: " . $this->personName . "<br>";
    }
}
$p1 = new Person("Ace");
$p2 = new Person("StormyTree3310");
$p3 = new Person("Lavender");

echo $studentCICT1->greet();

?>
<!DOCTYPE html>
<html lang="en">
<script src="https://cdn.tailwindcss.com"></script>

<head>
    <meta charset="UTF-8">
    <title>Bank UI</title>



    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'ui-sans-serif', 'system-ui'],
                    },
                    colors: {
                        base: "#EEEDEA",
                        primary: "#5C59C3",
                        ink: "#2B2A52",
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-base font-sans text-ink min-h-screen flex items-center justify-center">

    <div class="max-w-4xl w-full px-6">

        <h1 class="text-3xl font-semibold tracking-tight mb-8 text-center">
            Bank Accounts Overview
        </h1>

        <div class="grid md:grid-cols-2 gap-8">

            <!-- Card 1 -->
            <div class="bg-white rounded-2xl shadow-lg p-6 border border-neutral-200">

                <p class="text-sm text-neutral-500">Account Holder</p>
                <h2 class="text-xl font-semibold mt-1">

                </h2>

                <div class="mt-6 bg-base rounded-xl p-4">
                    <p class="text-sm text-neutral-500">Current Balance</p>
                    <p class="text-2xl font-bold text-primary mt-1">
                        ₱
                    </p>
                </div>

            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-2xl shadow-lg p-6 border border-neutral-200">

                <p class="text-sm text-neutral-500">Account Holder</p>
                <h2 class="text-xl font-semibold mt-1">

                </h2>

                <div class="mt-6 bg-base rounded-xl p-4">
                    <p class="text-sm text-neutral-500">Current Balance</p>
                    <p class="text-2xl font-bold text-primary mt-1">
                        ₱
                    </p>
                </div>

            </div>

        </div>

    </div>

</body>

</html>