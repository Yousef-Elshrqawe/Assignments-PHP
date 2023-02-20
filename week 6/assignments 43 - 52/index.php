<?php
echo "----------------------------------------   Assignment 1 ---------------------------------------- <BR>";
function greeting($name, $typ = null)
{
    if ($typ == 'Male') {
        echo "Hello Mr $name <br>";
    } elseif ($typ == 'Female') {
        echo "Hello miss $name <br>";
    } else {
        echo "Hello  $name <br>";
    }
}

greeting("Osama", "Male"); // Hello Mr Osama
greeting("Eman", "Female"); // Hello Miss Eman
greeting("Sameh"); // Hello Sameh

echo "<BR>";
echo "----------------------------------------   Assignment 2 ---------------------------------------- <BR>";

function get_arguments(...$arg)
{
    foreach ($arg as $ar) :
        echo $ar . " ";
    endforeach;
}

echo get_arguments("Hello", "Elzero", "Web", "School");
echo "<br>";
echo get_arguments("I", "Love", "PHP");
echo "<br>";
echo "----------------------------------------   Assignment 3 ---------------------------------------- <BR>";

function sum_all(...$nums)
{
    $sum = 0;
    foreach ($nums as $num) :
        $num == 5 ? $num = 0 : $num;
        $num == 10 ? $num = 20 : $num;
        $sum += +(int)$num;
    endforeach;
    return $sum;
}

echo sum_all(10, 12, 5, 6, 6, 10) . "<br>";
echo sum_all(5, 10, 5, 10);

echo "<BR> ----------------------------------------   Assignment 4 ---------------------------------------- <BR>";
function multiply(...$numbrs)
{
    $sum = 1;
    foreach ($numbrs as $numbr) :
        gettype($numbr) != 'string' ? $sum *= (int)$numbr : null;
    endforeach;
    echo $sum . " <br>";
}

echo multiply(10, 20); // 200
echo multiply("A", 10, 30); // 300
echo multiply(100.5, 10, "B"); // 1000
echo "<BR> ----------------------------------------   Assignment 5 ---------------------------------------- <BR>";
function check_status($a, $b, $c)
{
    if (gettype($a) === "string" && gettype($b) === "integer" && gettype($c) === "boolean") {
        $display1 = "";
        if ($c == true) {
            $display1 .= "Hello $a, Your Age Is $b, You Are Available For Hire<br>";
        } else {
            $display1 .= "Hello $a, Your Age Is $b, You Are Not Available For Hire<br>";
        }
        return $display1;
    }
    if (gettype($a) === "integer" && gettype($b) === "string" && gettype($c) === "boolean") {
        $display2 = "";
        if ($c == true) {
            $display2 .= "Hello $b, Your Age Is $a, You Are Available For Hire<br>";
        } else {
            $display2 .= "Hello $b, Your Age Is $a, You Are Not Available For Hire<br>";
        }
        return $display2;
    }
    if (gettype($a) === "boolean" && gettype($b) === "integer" && gettype($c) === "string") {
        $display3 = "";
        if ($c == true) {
            $display3 .= "Hello $c, Your Age Is $b, You Are Available For Hire<br>";
        } else {
            $display3 .= "Hello $c, Your Age Is $b, You Are Not Available For Hire<br>";
        }
        return $display3;
    }
    if (gettype($a) === "boolean" && gettype($b) === "string" && gettype($c) === "integer") {
        $display4 = "";
        if ($a == true) {
            $display4 .= "Hello $b, Your Age Is $c, You Are Available For Hire<br>";
        } else {
            $display4 .= "Hello $b, Your Age Is $c, You Are Not Available For Hire<br>";
        }
        return $display4;

    }
}

echo check_status("Osama", 38, true);
echo check_status(38, "Osama", true);
echo check_status(true, 38, "Osama");
echo check_status(false, "Osama", 38);

echo "<BR> ----------------------------------------   Assignment 6 ---------------------------------------- <BR>";

function calculate($num1, $num2, $clc = "a")
{
    if     ($clc == "add" || $clc == "a")      return $num1 + $num2 . "<br>";
    elseif ($clc == "subtract" || $clc == "s") return $num1 - $num2 . "<br>";
    elseif ($clc == "multiply" || $clc == "m") return $num1 * $num2 . "<br>";
    else                                       return $num1 + $num2 . "<br>";
}

echo calculate(10, 20); // 30
echo calculate(10, 20, "a"); // 30
echo calculate(10, 20, "s"); // -10
echo calculate(10, 20, "subtract"); // -10
echo calculate(10, 20, "multiply"); // 200
echo calculate(10, 20, "m"); // 200
echo "<BR> ----------------------------------------   Assignment 7 ---------------------------------------- <BR>";

function calculates(float $num_one, int $num_two)
{
    return $num_one + $num_two ;
}

echo calculates(20, 10); // 30
echo "<br>";
echo gettype(calculates(20, 10)); // Double

echo "<BR> ----------------------------------------   Assignment 8 ---------------------------------------- <BR>";

$message = "Hello";
$$message = &$message;
$message =  fn($name) => $message . " " . $name;
echo $Hello("Osama");

echo "<BR> ----------------------------------------   Assignment 9 ---------------------------------------- <BR>";
//Arrow Function
$greet = function ($name){
    printf("Greetings %s\r\n", $name . "<br>");
};
echo $greet("yousef"); // Greetings

// Anonymous function
$greets =  fn($name) =>  "Greetings : $name";
echo $greets("yousef");