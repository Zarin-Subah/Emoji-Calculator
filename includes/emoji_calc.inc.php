<?php
include 'class-autoload.inc.php';

$oper = $_POST["operator"]; // take operator from users
$num1 = $_POST["number1"]; // take the first number from user
$num2 = $_POST["number2"]; // take the first number from user

$calc = new Emoji_Calc($oper,$num1,$num2); // create object for Emoji_Calc class
try {
    $result = $calc->emoji_calculator(); // call the emoji_calculator() to calculate
    $myArr = array($num1,$oper,$num2,$result); // pur numbers and result in a array  
    $RJSON = json_encode($myArr); //will take value from $myArr to show in json
    echo $RJSON; // To print the json file
} catch (TypeError $e) {
    echo "Error!: " .$e->getMessage(); // will give a error message if anything goes wrong
}

?>