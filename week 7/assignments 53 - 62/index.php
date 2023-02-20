<?php
echo "----------------------------------------   Assignment 1 ---------------------------------------- <BR>";
$num_one = -1;
$num_two = 2.5;

$let_one = "o";
$let_two = "z";

$str = "El%er0";

$str[$num_one] = $let_one;
$str[(int)$num_two] = $let_two;

echo $str; // Elzero

echo "<BR>----------------------------------------   Assignment 2 ---------------------------------------- <BR>";

$str = "Orezle";
echo ucfirst(strrev(str_replace("O" , "o" ,$str)));

echo "<BR>----------------------------------------   Assignment 3 ---------------------------------------- <BR>";
$str = 'aAa';
$num = 3;
$char = "_";

// Write Your Code Here
//echo strtolower($str);
echo  chunk_split(str_repeat(strtolower($str) , $num), $num , $char);
// aaa_aaa_aaa_
echo "<BR> ----------------------------------------   Assignment 4 ---------------------------------------- <BR>";

$str = "<div><b>Elzero</b></div>";
echo strip_tags($str , "<b></b>");
// <b>Elzero</b>
echo "<BR> ----------------------------------------   Assignment 5 ---------------------------------------- <BR>";
$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;
echo  substr_count($str,"$e",$four)."<br>";


echo substr_count(strtoupper($str),"$o",6) ;
// 1
// 2
echo "<BR> ----------------------------------------   Assignment 6 ---------------------------------------- <BR>";
$chars = ["E", "l", "z", "e", "r", "o"];

echo  implode($chars);
// Output
//"Elzero"
echo "<BR> ----------------------------------------   Assignment 7 ---------------------------------------- <BR>";

$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];
$re =  implode($chars);
$numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
$result = str_replace($numbers, "", $re);
echo  ucfirst(strtolower($result));

// Output
//"Elzero"
