<!DOCTYPE html>
<html>
<head>
    <title> FUNCIONES </title>
</head>
<body>
    <h1> Ejercicio 7 </h1>
    <?php

    $texto = "Aenean auctor metus massa. Aenean lacinia massa ut tellus interdum. Quisque aliquet egestas libero. In vel odio non enim pellentesque lobortis. In eu mi lacinia, consequat ligula nec, sollicitudin erat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In euismod enim ut elit ullamcorper, eget faucibus purus commodo. Curabitur feugiat lacus sed turpis accumsan, ac iaculis eros interdum. In in est quis dolor sagittis mollis at augue. Integer sagittis dolor eget turpis tincidunt, nec ultricies turpis sollicitudin. Cras tristique eros id ipsum elementum, nec convallis est semper.";
    $palabraBuscar = "nec";
    $palabraReemplazar = "NEC";

    
    $coincidencias = substr_count(strtolower($texto), strtolower($palabraBuscar));
    if ($coincidencias > 0) {
        echo "Se ha encontrado la palabra '{$palabraBuscar}' {$coincidencias} veces.";
    } else {
        echo "No se ha encontrado la palabra '{$palabraBuscar}'.";
    }

    
    $texto = str_replace($palabraBuscar, $palabraReemplazar, $texto);
    echo "<br><br>Texto modificado: <br>";
    echo $texto;
?>