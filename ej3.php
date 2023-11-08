<!DOCTYPE html>
<html>
<head>
    <title> FUNCIONES </title>
</head>
<body>
    <h1> Ejercicio 3 </h1>
<?php
function dameNumero() {
    return rand(1, 49);
}

function dameCombinacionLoteria() {
    $numeros = array();

    while (count($numeros) < 6) {
        $numero = dameNumero();

        if (!in_array($numero, $numeros)) {
            array_push($numeros, $numero);
        }
    }

    sort($numeros);
    return $numeros;
}

$combinacion = dameCombinacionLoteria();

foreach ($combinacion as $numero) {
    echo "  $numero ";
}
?>