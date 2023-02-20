<?php
//5 الاسبوع

$name = "Yousef";
$phone = "01016736771";

if ( $name == "Yousef" ) {
echo "Hello Yousef";
}elseif ($name == "Ahmed") {
echo "Hello Ahmed";
} else {
echo "Hello World";
}

echo "<br>";
// while loop
echo '<br>';
echo '<br>';
    
$i = 1;

while ($i<=10)
{
    echo "<br>" . $i;
    $i++;
}
echo '<br>';
echo '<br>';
echo '<br>';

// Sentacs  بديل  
// while ($i<=10):
//     echo "<br>" . $i;
//     $i++;
// endwhile;
echo '<br>';
echo '<br>';
echo '<br>';


// do while يطبع  المتغير  بعدين يشوف  الشرط
$a = 11;
do {
    echo "<br>" . $a;
    $a++;
} while ($a <= 10);

echo '<br>';
echo '<br>';
echo '<br>';
// for  
 for ($i=0; $i <= 20 ; $i++) {
    echo "<br>$i";
 }

echo '<br>';
echo '<br>';
echo '<br>';


$countries = ["EG" => 50, "SA" => 60, "QA" => 80];

foreach ($countries as $key => $value) {
    echo "الخصم  لهذه البلد $key هو $value" . "<br>";
}


