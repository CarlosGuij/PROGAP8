
<!DOCTYPE html>
<html>
<head>
    <title> FUNCIONES </title>
</head>
<body>
    <h1> Ejercicio 2 </h1>
<?php
function numRomano($num) {
    $romanos = ['M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1];
    $romano = '';
    foreach ($romanos as $letra => $valor) {
        while ($num >= $valor) {
            $romano .= $letra;
            $num -= $valor;
        }
    }
    return $romano;
}

echo "Ingrese un número entre 1 y 10: ";
if ($num >= 1 && $num <= 10) {
    echo "El número " . $num . " en romanos es: " . numRomano($num) . "\n";
} else {
    echo "El número ingresado no está en el rango permitido (1-10).\n";
}
?>
<form method="POST" action="">
        <label for="n1">INTRODUCE UN NÚMERO DEL 1 al 10:</label>
        <input type="number" id="n1" name="n1" value="">
        
        <input type="submit" value="CALCULAR">
    </form>
</body>
</html>