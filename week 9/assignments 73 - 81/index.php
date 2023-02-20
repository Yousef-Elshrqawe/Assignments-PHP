<?php
echo "<BR> ----------------------------------------   Assignment 1 ---------------------------------------- <BR>";
$rand =  rand(10, 20 );
if ($rand != 20 && $rand != 10){
    echo $rand;
}
else{
    echo $rand - 1;
}
echo "<BR> ----------------------------------------   Assignment 2 ---------------------------------------- <BR>";
$friends = ["Osama", "Ahmed", "Sayed", "Ibrahim"];
echo $friends[rand(0, count($friends) - 1)];

echo "<BR> ----------------------------------------   Assignment 3 ---------------------------------------- <BR>";
$num1 = 11.5; // 11
echo round($num1 , 0, PHP_ROUND_HALF_DOWN); echo "<BR>";
$num2 = 9.4898; // 9.5
echo round($num2 , 1 ); echo "<BR>";
$num3 = -7.5; // -7
echo round($num3 , 0, PHP_ROUND_HALF_DOWN); echo "<BR>";

echo "<BR> ----------------------------------------   Assignment 4 ---------------------------------------- <BR>";

$filter = filter_list();
$array = array();
foreach ($filter as $key => $value) {
     $array[filter_id($value)] = $value;
}
echo "<pre>";
print_r($array);
echo "</pre>";

echo "<BR> ----------------------------------------   Assignment 5 ---------------------------------------- <BR>";
$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";
// Valid Or Not A Valid URL
echo filter_var($url1, FILTER_VALIDATE_URL) ? "A Valid URL" : "Not A Valid URL"; echo "<BR>";
echo filter_var($url2, FILTER_VALIDATE_URL) ? "A Valid URL" : "Not A Valid URL"; echo "<BR>";
echo filter_var($url3, FILTER_VALIDATE_URL) ? "A Valid URL" : "Not A Valid URL"; echo "<BR>";
echo filter_var($url4, FILTER_VALIDATE_URL) ? "A Valid URL" : "Not A Valid URL"; echo "<BR>";

echo "<BR> ----------------------------------------   Assignment 6 ---------------------------------------- <BR>";
$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";
echo filter_var($url1, FILTER_SANITIZE_URL); echo "<BR>";
echo filter_var($url2, FILTER_SANITIZE_URL); echo "<BR>";
echo filter_var($url3, FILTER_SANITIZE_URL); echo "<BR>";
echo filter_var($url4, FILTER_SANITIZE_URL); echo "<BR>";
