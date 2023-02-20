<?php
echo "----------------------------------------   Assignment 1 ---------------------------------------- <BR>";
$name = 'Elzero Courses';
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo $name; ?>">
        <title>Welcome To <?php echo $name; ?></title>
    </head>
    <body>
    <h1><?php echo $name; ?></h1>
    <p>Here In <?php echo $name; ?> We Provide Front-End And Back-End Courses</p>
    <hr>
    <div><?php echo $name; ?> Is The What You Need.</div>
    <footer>All Right Reserved To <?php echo $name; ?></footer>
    </body>
    </html>
    <BR>
<?php

echo "----------------------------------------   Assignment 2 ---------------------------------------- <BR>";


$name = "elzero";
$$name = "Web";


echo $$name;
echo "<br>";
echo $elzero;
echo "<br>";
echo "${$name}";
echo "<br>";
echo $name = $$name;
echo "<br>";
echo $name;
echo "<br>";
echo $elzero;
echo "<br>";
echo $elzero = $name;
echo "<br>";
echo $name = $elzero;
echo "<br>";
echo $Web = $name;
echo "<br>";
echo $Web;
echo "<br>";
echo "<br>";


echo "----------------------------------------   Assignment 3 ---------------------------------------- <BR>";


$a = 200;
$b = $a;
$a = 100;

echo $b - $a; // 100

echo "<br>";
$a = 200;
$b = $a;
$a = 100;
echo $b = $a;
echo "<br>";
$a = 200;
$b = &$a;
$a = 100;
echo $b;

echo "<br>";
echo "<br>";

echo "----------------------------------------   Assignment 4 ---------------------------------------- <BR>";

echo "<br>";
echo "<br>";
//print_r($_SERVER);
echo "<br>";
echo $_SERVER["CONTEXT_DOCUMENT_ROOT"];
echo "<br>";
echo $_SERVER["SERVER_NAME"];
echo "<br>";
echo $_SERVER["WINDIR"];
echo "<br>";
echo $_SERVER["SCRIPT_FILENAME"];
echo "<br>";


echo "<br>";
echo "<br>";

echo "----------------------------------------   Assignment 5 ---------------------------------------- <BR>";


echo "<br>";
//echo PHP_INT_MAX ;
/*
 * PHP_VERSION   رقم الاصدار  الحالي كامل
 * PHP_MAJOR_VERSION رقم الاصدار  الحالي كامل بدون كسور
 * PHP_MAXPATHLEN  الحد الأقصى لطول أسماء الملفات (بما في ذلك المسار) المدعوم من خلال بناء
 * PHP_INT_MAX  أكبر عدد صحيح مدعوم
 * PHP_INT_MIN  أصغر عدد صحيح مدعوم
 * PHP_DATADIR
 * PHP_SYSCONFDIR
 * PHP_LOCALSTATEDIR
 * PHP_CONFIG_FILE_PATH
 * PHP_CONFIG_FILE_SCAN_DIR
  */

echo <<<'code'
 * PHP_VERSION   رقم الاصدار  الحالي كامل <br>
 * PHP_MAJOR_VERSION رقم الاصدار  الحالي كامل بدون كسور<br>
 * PHP_MAXPATHLEN  الحد الأقصى لطول أسماء الملفات (بما في ذلك المسار) المدعوم من خلال بناء<br>
 * PHP_INT_MAX  أكبر عدد صحيح مدعوم<br>
 * PHP_INT_MIN  أصغر عدد صحيح مدعوم<br>
 * PHP_DATADIR<br>
 * PHP_SYSCONFDIR<br>
 * PHP_LOCALSTATEDIR<br>
 * PHP_CONFIG_FILE_PATH<br>
 * PHP_CONFIG_FILE_SCAN_DIR<br>
code;

echo "<br>";
echo "<br>";

echo "----------------------------------------   Assignment 6 ---------------------------------------- <BR>";


echo "<br>";
echo __line__;
echo "<br>";
echo __file__;
echo "<br>";
echo __dir__;
echo "<br>";
echo "<br>";

echo "<br>";
echo "<br>";















