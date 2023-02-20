<?php
$arr =  [1 => 1, 2 , "S" => 3,4,5,6,7,8,9,10];
echo "<pre>";
print_r($arr);
echo "</pre>";



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<button id='button'>nopll</button>
<div></div>


<script>
   
    var btn = document.querySelector("button");
    var div = document.querySelector("div");
    $('#button').attr("disabled", "disabled");
    setTimeout('enableButton()', 5000);

    function enableButton(){
       $('#button').removeAttr('disabled');
    }
</script>
</body>
</html>