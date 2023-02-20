<?php

/*
  Variable Variable
  Takes The Value Of A Variable And Treats That As The Name Of A Variable
*/

$a = "osama";
$$a = "elzero";
$$$a = "school";

echo $a;
echo "<br>";
echo $$a;
echo "<br>";
echo $osama;
echo "<br>";
echo $$$a;
echo "<br>";
echo $elzero;
echo "<br>";

echo "Hello ${$a}"; // $$a
echo "<br>";
echo "Hello ${$$a}"; // $$$a

/*
  Assign Variable By Reference
  - By Default, Variables Are Always Assigned By Value
  - Assigned By Reference Make Variable Alias Or Point To Another

  Search
  - References Are Not Pointers
*/

$a = "Osama";

$b = "Elzero";
$a = "School";

echo $a;
echo '<br>';
echo $b;


echo '<br>';
echo __line__;
echo '<br>';
echo __FILE__;
echo '<br>';
echo __DIR__;
echo '<br>';
echo PHP_VERSION;