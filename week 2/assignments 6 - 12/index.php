<?php

echo "----------------------------------------   Assignment 1 ---------------------------------------- <BR>";
echo (int)(15.2 + 14.7) + (10.5 + 10.5); // 50
echo "<br>";
echo gettype((int)15.2 + (int)14.7 + (int)(10.5 + 10.5)); // Integer


echo "<br>";
echo "<br>";

echo "----------------------------------------   Assignment 2 ---------------------------------------- <BR>";


echo gettype(100); // Integer
echo "<br>";
var_dump(100); // Integer
echo "<br>";
echo get_debug_type(100) ;


echo "<br>";
echo "<br>";

echo "----------------------------------------   Assignment 3 ---------------------------------------- <BR>";



echo "Hello \"Elzero\" \\\\ \"\"\" We Love \"$\$PHP\"";

// Needed Output
// Hello "Elzero" \\ """ We Love "$$PHP"



echo "<br>";
echo "<br>";

echo "----------------------------------------   Assignment 4 ---------------------------------------- <BR>";


echo nl2br("We \n Love \n Elzero \n Web \n School");
// Needed Output
/*We
Love
Elzero
Web
School*/





echo "<br>";
echo "<br>";

echo "----------------------------------------   Assignment 5 ---------------------------------------- <BR>";



echo
nl2br(<<<'test'
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"
test
);


echo "<br>";
echo "<br>";

echo "----------------------------------------   Assignment 6 ---------------------------------------- <BR>";


$something = "Programming";

echo <<<"code"
        Hello \PHP\
        We Love $something
code;

// [1] Fix The Error
// [2] Remove 2 Characters To Get The Output

// Needed Output
//Hello \PHP\ We Love Programming




echo "<br>";
echo "<br>";

echo "----------------------------------------   Assignment 7 ---------------------------------------- <BR>";



echo (bool) "Hello PHP";
echo '<br>';
echo gettype((int) "Hello PHP") ;

// Needed Output
/*1
integer*/



echo "<br>";
echo "<br>";

echo "----------------------------------------   Assignment 8 ---------------------------------------- <BR>";


echo "<pre ";
print_r([
    "FrontEnd" => array
    (
        "html" , "css" , "js" => array
        (
            "Vuejs" => array
            (
                "2" => "v2",
                "3" => "v3"
            ),
            "Reactjs",
            "Svelte"
        )
    ),

    "BackEnd" => array
    (
        "PHP",
        "MySQL",
        "Security",
    ),
    "git",
    "Github",
    "Testing" =>array
    (
        "Unit Testing",
        "End To End",
        "Integration",
    )
]);
echo "</pre";
















