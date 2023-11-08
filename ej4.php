<!DOCTYPE html>
<html>
<head>
    <title> FUNCIONES </title>
</head>
<body>
    <h1> Ejercicio 4 </h1>
<?php
function calculaSalario($horas, $tarifa = 10){
    if($horas > 40){
       $horasExtras = $horas - 40;
       $horasNormal = 40;
       $tarifa = $tarifa + ($tarifa * 0.25);
       $salario = ($horasNormal * $tarifa) + ($horasExtras * $tarifa);
    } else {
       $salario = $horas * $tarifa;
    }
    return $salario;
 }
 
 $empleados = [
    'Juan'=>[
       'horas' => 40,
       'tarifa' => 15
    ],
    'Perico'=>[
       'horas' => 20,
       'tarifa' => 25
    ],
    'Andrés'=>[
       'horas' => 45
    ],
 ];
 
 foreach($empleados as $nombre => $datos){
    $horas = $datos['horas'];
    $tarifa = isset($datos['tarifa']) ? $datos['tarifa'] : 10;
    $salario = calculaSalario($horas, $tarifa);
    echo "El salario de " . $nombre . " es: " . $salario . "€<br>";
 }
?>