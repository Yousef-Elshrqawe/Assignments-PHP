<?php
echo '<BR> ----------------------------------------   Assignment 1 ---------------------------------------- <BR>';
$friends = [
    'AG' => 'Ahmed Gamal',
    'OM' => 'Osama Mohamed',
    'MG' => 'Mahmoud Gamal',
    'AS' => 'Ahmed Samy',
    'FA' => 'Farid Ahmed',
    'SM' => 'Sayed Mohamed',
];
echo '<pre>';
print_r(array_chunk(array_change_key_case($friends, CASE_LOWER), 2, true));
echo '</pre>';
echo '<BR> ----------------------------------------   Assignment 2 ---------------------------------------- <BR>';
$codes = ['H', 'C', 'J'];
$means = ['HTML', 'CSS', 'JavaScript'];
echo '<pre>';
print_r(array_change_key_case(array_combine($codes, $means), CASE_LOWER));
echo '</pre>';
echo '<BR> ----------------------------------------   Assignment 3 ---------------------------------------- <BR>';
$friends = [
    'Ahmed Gamal' => 'AG',
    'Osama Mohamed' => 'OM',
    'Mahmoud Gamal' => 'MG',
    'Ahmed Samy' => 'AS',
];
echo '<pre>';
print_r(array_change_key_case(array_reverse(array_flip($friends)), CASE_LOWER));
echo '</pre>';
echo '<BR> ----------------------------------------   Assignment 4 ---------------------------------------- <BR>';
$nums = [10, 20, 30];
echo '<pre>';
print_r(array_sum($nums));
echo '</pre>';

print_r(
    array_reduce($nums, function ($a, $b) {
        return $a + $b;
    })
);

echo '<BR> ----------------------------------------   Assignment 5 ---------------------------------------- <BR>';
$nums = [5, 10, 20, 5, 30, 40];

echo '<pre>';
print_r(array_sum(array_filter($nums, fn($a) => $a > 5)));
echo '</pre>';

echo '<BR> ----------------------------------------   Assignment 6 ---------------------------------------- <BR>';
$chars = ['A', 'B', 'C', 'D', 'E'];
$char = '@@';
$zero = 0;

echo '<pre>';
print_r(array_pad($chars, 10, $char[$zero]));
echo '</pre>';

echo '<BR> ----------------------------------------   Assignment 7 ---------------------------------------- <BR>';
$names = ['Osama', 'Ahmed', 'Sayed', 'Mahmoud', 'Ali'];

// Write Line Here
// Write Line Here
next($names);
next($names);
echo current($names) . '<br>'; // "Sayed"

// Write Line Here
end($names);

echo current($names) . '<br>'; // "Ali"

// Write Line Here
reset($names);

echo current($names) . '<br>'; // "Osama"

// Write Line Here
// Write Line Here
end($names);
prev($names);

echo current($names) . '<br>'; // "Mahmoud"
echo '<BR> ----------------------------------------   Assignment 8 ---------------------------------------- <BR>';
$chars = ['A', 'B', 'C'];
echo '<pre>';
print_r(array_pad($chars, 4, 'D'));
echo '</pre>';
echo '<pre>';
print_r(array_merge($chars, ['D']));
echo '</pre>';
echo '<pre>';
array_push($chars, 'D');
print_r($chars);
echo '</pre>';
echo '<pre>';
print_r($chars + ['D']);
echo '</pre>';
echo '<pre>';
$ar = 'D ';
array_pop($chars);
array_splice($chars, 3, 0, $ar);
print_r($chars);
echo '</pre>';

echo '<BR> ----------------------------------------   Assignment 9 ---------------------------------------- <BR>';
$nums = [1, 2, 3, 4, 5, 6];

echo '<pre>';
print_r(array_slice($nums, -5, -2));
echo '</pre>';
echo '<BR> ----------------------------------------   Assignment 10 ---------------------------------------- <BR>';
$mix = [1, 2, 3, 'A', 'B', 'C', 7, 8, 9];
$nums = [4, 5, 6];
echo '<pre>';
array_splice($mix, 3, 3, $nums);
print_r($mix);
// طريقه  ثانيه
print_r(array_merge(array_slice($mix, 0, 3), $nums, array_slice($mix, 6)));
echo '</pre>';
echo '<BR> ----------------------------------------   Assignment 11 ---------------------------------------- <BR>';
$arr = ['A', 'B', 'C', 'D', 'E'];

function countArr($arr)
{
    $count = 0;
    foreach ($arr as $key => $value) {
        $count++;
    }
    return $count;
}

echo countArr($arr);

//
echo '<BR> ----------------------------------------   Assignment 12 ---------------------------------------- <BR>';
$nums = [11, 2, 10, 7, 20, 50];
function sumss(...$nums)
{
    $sum = 0;
    foreach ($nums as $key => $value) {
        $sum += $value;
    }
    echo $sum;
}

sumss(...$nums);

echo '<BR> ----------------------------------------   Assignment 13 ---------------------------------------- <BR>';
$nums = [10, 100, -20, 50, 30];
// اكبر رقم
function maxs(...$nums)
{
    $max = 0;
    foreach ($nums as $key => $value) {
        if ($value > $max) {
            $max = $value;
        }
    }
    return $max;
}

echo maxs(...$nums);
echo '<BR> ----------------------------------------   Assignment 14 ---------------------------------------- <BR>';
$nums2 = [10, 100, -20, 50, 30];
// اصغر رقم
function mins(...$nums)
{
    $min = maxs(...$nums);
    foreach ($nums as $key => $value) {
        if ($value < $min) {
            $min = $value;
        }
    }
    return $min;
}

echo mins(...$nums2);

echo '<BR> ----------------------------------------   Assignment 15 ---------------------------------------- <BR>';
$chars = ['o', 'r', 'e', 'z', 'l', 'E'];

function implodeArr($chars)
{
    $str = '';
    foreach ($chars as $key => $value) {
        $str .= $value;
    }
    return $str;
}

function sortArr($arr)
{
    $count = countArr($arr);
    $chars2 = [];
    for ($i = 0; $i < $count; $i++) {
        $chars2[] = $arr[$count - $i - 1];
    }
    return $chars2;
}

print_r(implodeArr(sortArr($chars)));

echo '<BR> ----------------------------------------   Assignment 16 ---------------------------------------- <BR>';
$mix = ['A', 'C', 'B', 1, 100, 3, 2, 6, 5, 7];
array_filter($mix, function ($a) {
    if (is_int($a) && $a % 2 != 0) {
        echo $a . '<br>';
    }
});

echo '<BR> ----------------------------------------   Assignment 17 ---------------------------------------- <BR>';
$nums = [1, 2, 3, 4, 5, 6];

// Output
// Every Time The Array Elements Will Be Shuffled

function shuffleArr($arr)
{
    $count = countArr($arr);
    $arr2 = [];
    for ($i = 0; $i < $count; $i++) {
        $rand = rand(0, $count - 1);
        if (!in_array($rand, $arr2)) {
            $arr2[] = $rand;
        } else {
            $i--;
        }
    }
    $arr3 = [];
    foreach ($arr2 as $key => $value) {
        $arr3[] = $arr[$value];
    }
    return $arr3;
}

echo '<pre>';
print_r(shuffleArr($nums));
echo '</pre>';
echo '<pre>';
print_r(shuffleArr($nums));
echo '</pre>';

echo '<BR> ----------------------------------------   Assignment 18 ---------------------------------------- <BR>';
$title = "E&z\$r0 W\$b Sch00&";

// Output
// "Elzero Web School"
// 7

$str = str_replace(['&', '$', '0'], ['l', 'e', 'o'], $title, $count);
echo $str . '<br>' . $count;
