<?php
echo "----------------------------------------   Assignment 1 ---------------------------------------- <BR>";
// Replace ? With Arithmetic Operators
echo (10 * 20) + (15 % 3) + 190 + 10 - 400; // 0


echo "<BR>";
echo "<BR>";
echo "<BR>";
echo "----------------------------------------   Assignment 2 ---------------------------------------- <BR>";
$a = "10";
echo +$a;
echo "<br>";
echo gettype(+$a);
echo "<br>";
echo (int)$a;
echo "<br>";
echo gettype((int)$a);
echo "<br>";
echo $a = 10;
echo "<br>";
echo gettype($a);
echo "<br>";
echo   intval($a);
echo "<br>";
echo gettype(intval($a));
echo "<br>";

echo "<br>";
echo "<br>";


echo "----------------------------------------   Assignment 3 ---------------------------------------- <BR>";

$a = 10;
$b = 20;

echo $c = $a || $b  ;
echo "<br>";
echo gettype(+$c);

echo "<br>";
echo "<br>";
echo "<br>";

echo "----------------------------------------   Assignment 4 ---------------------------------------- <BR>";

$aa = 10;
$bb = 20;
$cc = 15;

var_dump($aa <> $bb); // True
echo "<br>";

var_dump($cc >= $aa); // True
echo "<br>";

var_dump($aa <= $bb); // True
echo "<br>";

var_dump($aa != $bb); // True
echo "<br>";

var_dump($aa <= $cc); // True
echo "<br>";

var_dump($aa < $cc); // True
echo "<br>";

var_dump(gettype($aa) == gettype($bb)); // True
echo "<br>";

var_dump(gettype($aa) === gettype($bb)); // True
echo "<br>";

var_dump(gettype((float) $aa) !== gettype($bb)); // True
echo "<br>";
echo "<br>";
echo "<br>";


echo "----------------------------------------   Assignment 5 ---------------------------------------- <BR>";


$points = 10;

$points++;
$points += true;
$points++;
echo $points; // 13
echo "<br>";
echo "<br>";

$v = true + true;

$points--;
$points--;
$points--;
$points -= $v;
echo $points; // 8;
echo "<br>";
echo "<br>";

echo "----------------------------------------   Assignment 6 ---------------------------------------- <BR>";


$a = "Elzero";
$b = "Web";
$c = "School";

// Method One
 $d = $a . " " . $b . " " . $c;

echo "<br>";

// Method Two
 $d = "$a $b $c";
echo "<br>";

// Method Three
 $d = "{$a} {$b} {$c}";
echo "<br>";

// Method Four
$d = <<<WEB
 $a $b $c
WEB;

// Method Five

echo "<br>";


$d =   $GLOBALS['a'] ." ".  $GLOBALS['b'] ." " .   $GLOBALS['c']   ;



echo $d; // Elzero Web School

echo "<br>";
echo "<br>";

echo "----------------------------------------   Assignment 7 ---------------------------------------- <BR>";



$a = 10;
$b = 20;

echo (($a + $b) * ($a + $b) + ($a * $a)) * $a; // 10000

echo "<br>";
echo "<br>";




echo "----------------------------------------   Assignment 8 ---------------------------------------- <BR>";


// Code 1
$a = $b;

// Code 2
$f = @file("Not_A_File") or die(" لايوجد ملف  في  هذا  العنوان 1");

echo "<br>";

// Code 3
(@include("Not_A_File")) or die("لايوجد ملف  في  هذا  العنوان");

echo "<br>";
echo "<br>";
echo "<br>";

