<!DOCTYPE html>
<html>
<head>
    <title> FUNCIONES </title>
</head>
<body>
    <h1> Ejercicio 6 </h1>
<?php
function printShape($char, $num) {
    
    for ($i = 1; $i <= $num; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $char;
        }
        echo "\n";
    }


    for ($i = $num - 1; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo $char;
        }
        echo "\n";
    }
}

$char = 'c';
$num = 10;
printShape($char, $num);

?>
