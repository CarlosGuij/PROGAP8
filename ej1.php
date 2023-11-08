<!DOCTYPE html>
<html>
<head>
    <title> FUNCIONES </title>
</head>
<body>
    <h1> Ejercicio 1 </h1>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $her1 = $_POST['$her1'];
        $her2 = $_POST['$her2'];
function diferenciaEdad($her1, $her2){
    if ($her1 > $her2){
        return $her1 - $her2;
    }else{
        return $her2 - $her1;
    }
    
    echo "Ingrese la edad del primer hermano: ";
$her1 = fgets(STDIN);
echo "Ingrese la edad del segundo hermano: ";
$her2 = fgets(STDIN);

$diferencia = diferenciaEdad($her1, $her2);
echo "La diferencia de edad entre los dos es : " . $diferencia . "años";
    }
}
?>

<form method="POST" action="">
        <label for="her1">INTRODUCE LA EDAD DEL HERMANO 1:</label>
        <input type="number" id="her1" name="her1" value="">
        
        <br>
        <label for="her2">INTRODUCE LA EDAD DEL HERMANO 2:</label>
        <input type="number" id="her2" name="her2" value="">
        
        <br>
        <input type="submit" value="HACER LA MEDIA DE LAS EDADES">
    </form>