<?php
echo "----------------------------------------   Assignment 1 ---------------------------------------- <BR>";
$a = 100;
$b = 200;
$c = 100;

if ($b > $a) {
    if ($a == $c) {
        if ($a + $c == $b) {
            echo "yas";
        }
    }
}
echo "<BR>";
echo "----------------------------------------   Assignment 2 ---------------------------------------- <BR>";
$a = 200;
$b = 200;
$c = 100;

if ($a > $b) {
    echo "A Is Larger Than B";
} elseif ($a > $c) {
    echo "A Is Larger Than C";
} else {
    echo "A Is Not Larger Than B Or C";
}

echo "<br>";
echo "----------------------------------------   Assignment 3 ---------------------------------------- <BR>";
$admins = ["Osama", "Ahmed", "Sayed"];
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    echo "The Request Method Is Post And " . $_POST['user'] . " Is Osama <br>";
    if ($_POST['user'] == $admins[0] || $_POST['user'] == $admins[1] || $_POST['user'] == $admins[2]) {
        echo "This Username " . $_POST['user'] . " Is Admin ";
    }
}
?>

    <form action="" method="POST">
        <input type="text" name="user">
        <input type="submit" value="Send">
    </form>

<?php

echo "<BR> ----------------------------------------   Assignment 4 ---------------------------------------- <BR>";

$a = 30;
$b = 20;
$c = 10;

/*if ($a + $b === $c)
    echo "A + B = C";
elseif ($a + $c === $b)
    echo "A + C = B";
elseif ($b + $c === $a)
    echo "B + C = A";
else
    echo "The End";*/

echo ($a + $b === $c) ? "A + B = C" : (($a + $c === $b) ? "A + C = B" : (($b + $c === $a) ? "B + C = A" : 'false'));
echo "<BR> ----------------------------------------   Assignment 5 ---------------------------------------- <BR>";

$name = "Osama";
$age = 40;
$country = "Egypt";

if ($age > 18 && gettype($name) === "string" && $country === "Egypt") {
    echo "The Age Is Good To Go<br>";
    echo "The Name Is Good To Go<br>";
    echo "The Country Is Good To Go<br>";
}

echo "<BR> ----------------------------------------   Assignment 6 ---------------------------------------- <BR>";

$genre = "Hack And Slash";
switch ($genre) {
    case "RPG" :
        echo "I Recommend Ys Games";
        break;
    case "Hack And Slash":
        echo "I Recommend Castlevania Games";
        break;
    case "FPS" :
        echo "I Recommend Uncharted Games";
        break;
    case "Platform" :
        echo "I Recommend Megaman Games";
        break;
    case "Puzzle" :
        echo "I Recommend Shadow Of Mordor And Shadow Of War";
        break;
    default:
        echo "I Recommend Shadow Of Mordor And Shadow Of War";
        break;
}
/*if ($genre === "RPG") {

    echo "I Recommend Ys Games";

} elseif ($genre === "Hack And Slash") {

    echo "I Recommend Castlevania Games";

} elseif ($genre === "FPS") {

    echo "I Recommend Uncharted Games";

} elseif ($genre === "Platform") {

    echo "I Recommend Megaman Games";

} elseif ($genre === "Puzzle") {

    echo "I Recommend Megaman Games";

} else {

    echo "I Recommend Shadow Of Mordor And Shadow Of War";

}*/


// Needed Output
//"I Recommend Castlevania Games"

echo "<BR> ----------------------------------------   Assignment 7 ---------------------------------------- <BR>";


$num_one = 23;
$num_two = 5;
$op = "/";

if ($op == "+") {
    echo $num_one + $num_two;
} elseif ($op == "-") {
    echo $num_one - $num_two;
} elseif ($op == "*") {
    echo $num_one * $num_two;
} elseif ($op == "/") {
    echo floor($num_one / $num_two ) . "<br>";
    echo ($num_one % $num_two );
}
echo "<BR> ----------------------------------------   Assignment 8 ---------------------------------------- <BR>";


$day = "Thu";

//switch($day) {
//    case "Sat":
//    case "Sun":
//    case "Mon":
//        echo "We Are Open All The Day";
//        break;
//    case "Tue":
//    case "Wed":
//        echo "We Are Open From 08:12";
//        break;
//    case "Thu":
//    case "Fri":
//        echo "We Are Closed";
//        break;
//    default:
//        echo "Unknown Day";
//}

if ($day == "Sat" || $day == "Sun" ||$day == "Mon"  ) {
    echo "We Are Open All The Day";
}elseif ($day == "Tue" || $day == "Wed"){
    echo "We Are Open From 08:12";
}elseif ($day == "Thu" || $day == "Fri"){
    echo "We Are Closed";
}else{
    echo "Unknown Day";
}