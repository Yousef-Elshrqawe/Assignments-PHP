<?php
//yousef
$arr = ['f' , "e" , "s" , "u" , "o" , "y"];

echo "<pre>";
print_r($arr);
echo "</pre>";


$sums = [2, "klo",10] ;
$re = 1;
foreach ($sums as $sum){
    if (gettype($sum) != "string"){
        $re *=  $sum;
    }
}
echo $re;

