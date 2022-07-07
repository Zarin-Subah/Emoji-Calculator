<?php
include 'class-autoload.inc.php';

$oper = $_POST["operator"];
$num1 = $_POST["number1"];
$num2 = $_POST["number2"];

$calc = new Emoji_Calc($oper,$num1,$num2);
try {
    $result = $calc->emoji_calculator();
    $myArr = array($num1,$oper,$num2,$result);
    $RJSON = json_encode($myArr);
    echo $RJSON;
} catch (TypeError $e) {
    echo "Error!: " .$e->getMessage();
}

?>