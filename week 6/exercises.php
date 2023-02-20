<?php

function get_datas($co = null, $na = 'null', $ag = 'null', $add = 'null')
{

    $line_one = "$co .... $na ....... $ag .......$add";
    return $line_one;

}

echo get_datas(add: 'jdssj');


echo "<br>";
echo "<br>";
echo "<br>";

//function sum(){
//    echo  func_num_args();
//}
//echo sum(1 , 2 , 3 );


function get_data($name, $co = null, ...$skills)
{
    echo "hallo $name  your Country Is  $co  <br>";
    echo "Skills <br>";
    foreach ($skills as $skill) :
        echo "-- $skill <br>";
    endforeach;


}

get_data('yousef ', "  Eg", 'html', 'css', 'php', 'laravel ', 'mysql' , '1016736771');



