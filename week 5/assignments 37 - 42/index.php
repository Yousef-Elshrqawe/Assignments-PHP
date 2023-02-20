<?php
echo "----------------------------------------   Assignment 1 ---------------------------------------- <BR>";
$index = 10;

while ($index >= 1) {
    echo $index . "<BR>";
    $index--;
}

echo "<br>";

// for($index = 10; $index >= 1; $index--){
//     echo $index . "<BR>";
// }

echo "----------------------------------------   Assignment 2 ---------------------------------------- <BR>";
$index = 0;

// while ($index <= 20){
//     echo $index . "<br>";
//     $index += 2;
// }

// for ($index = 0; $index <= 20; $index +=2){
//     echo $index . "<br>";
// }

do {
    echo $index . "<br>";
    $index += 2;

} while ($index <= 20);

echo "----------------------------------------   Assignment 3 ---------------------------------------- <BR>";

$num = 2;
$num--;
while ($num < 520) {
    echo $num . "<br>";
    $num *= 2;
    $num += 2;

}
echo "----------------------------------------   Assignment 4 ---------------------------------------- <BR>";


$start = 10;
$end = 0;
$stop = 3;
$s10 = $start;

for ($i = $start; $start >= $stop; $start--) {
    if ($start < $s10) {
        echo $end . $start . "<br>";
    } else {
        echo $start . "<br>";
    }
}

echo "----------------------------------------   Assignment 5 ---------------------------------------- <BR>";

$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];

// Output
//2
//3
//4

for ($i = $start; $i < count($mix); $i++) {
    if (is_numeric($mix[$i])) {
        if ($mix[$i] > $mix[$start]) {
            echo $mix[$i] . "<br>";
        }
    }
}
echo "----------------------------------------   Assignment 6 ---------------------------------------- <BR>";
$money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];

foreach ($money as $key => $value) {
    echo "The Name Is $key And I Need $value Pound From Him" . "<br>";
}

echo "----------------------------------------   Assignment 7 ---------------------------------------- <BR>";

$mix = [1, 2, "A", "B", "C", 3, 4];
foreach ($mix as $key => $value) {
    if (is_numeric($value)) {
        echo $value . "<br>";
    }
}
echo "<br>" . count(array_filter($mix, 'is_numeric')) ." Numbers Printed" .  "<br>";
echo  count(array_filter($mix, 'is_string')) . " Letters Ignored" .  "<br>";

echo "----------------------------------------   Assignment 8 ---------------------------------------- <BR>";
$nums = [1, 13, 12, 20, 51, 17, 30];

foreach ($nums as $key => $value) {
    if ($value % 2 == 0) {
        echo $value / 2 . "<br>";
    }
}


echo "----------------------------------------   Assignment 9 ---------------------------------------- <BR>";
$help_num = 3;
$nums = [4, 5, 6, 1, 2, 3];
$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];

for($i = 0;$i<count($names); $i++){
    if($names[$i]== "Sayed"){
        echo $names[$nums[$help_num]]. "<br>";
        echo $names[$nums[$help_num]+$nums[$help_num]] . "<br>";
    }
}
/*
// Output
//sayed
//osama*/

echo "----------------------------------------   Assignment 10 ---------------------------------------- <BR>";

$help_num = 4;
$nums = [2, 4, 5, 6, 10];

for ($i = 0; $i < count($nums); $i++) {
    echo $nums[$i] . " + " . $nums[$help_num] . " = " . ($nums[$i] + $nums[$help_num]) . "<br>";
    $help_num--;
}

// Output
/*"2 + 10 = 12"
"4 + 6 = 10"
"5 + 5 = 10"
"6 + 4 = 10"
"10 + 2 = 12"*/