<!DOCTYPE html>
<html>
<head>
    <title> FUNCIONES </title>
</head>
<body>
    <h1> Ejercicio 5 </h1>
<?php
$data = [
    ["nombre" => "Hunter", "peso" => 8, "edad" => 10],
    ["nombre" => "Carter", "peso" => 3, "edad" => 2],
    ["nombre" => "Basil", "peso" => 9, "edad" => 12],
    ["nombre" => "Boris", "peso" => 8, "edad" => 14],
    ["nombre" => "Autumn", "peso" => 5, "edad" => 5],
    ["nombre" => "Blaine", "peso" => 5, "edad" => 3],
    ["nombre" => "Jelani", "peso" => 2, "edad" => 13],
    ["nombre" => "Melinda", "peso" => 5, "edad" => 7],
    ["nombre" => "Rahim", "peso" => 1, "edad" => 6],
    ["nombre" => "Rooney", "peso" => 8, "edad" => 4],
    ["nombre" => "Kimberley", "peso" => 1, "edad" => 10],
    ["nombre" => "Eric", "peso" => 8, "edad" => 1],
    ["nombre" => "Jerry", "peso" => 5, "edad" => 4],
    ["nombre" => "Shea", "peso" => 2, "edad" => 3],
    ["nombre" => "Graham", "peso" => 9, "edad" => 11],
    ["nombre" => "Wing", "peso" => 8, "edad" => 7],
    ["nombre" => "Gareth", "peso" => 8, "edad" => 14],
    ["nombre" => "Cyrus", "peso" => 8, "edad" => 15],
    ["nombre" => "Mark", "peso" => 4, "edad" => 12],
    ["nombre" => "Laith", "peso" => 4, "edad" => 6],
    ["nombre" => "Susan", "peso" => 6, "edad" => 13],
    ["nombre" => "Jacqueline", "peso" => 5, "edad" => 14],
    ["nombre" => "Hollee", "peso" => 3, "edad" => 15],
    ["nombre" => "Denton", "peso" => 7, "edad" => 2],
    ["nombre" => "John", "peso" => 9, "edad" => 2],
    ["nombre" => "Yoko", "peso" => 8, "edad" => 5],
    ["nombre" => "Audrey", "peso" => 5, "edad" => 9],
    ["nombre" => "Xyla", "peso" => 6, "edad" => 5],
    ["nombre" => "Uma", "peso" => 3, "edad" => 9],
    ["nombre" => "Macaulay", "peso" => 7, "edad" => 14],
    ["nombre" => "Jolie", "peso" => 5, "edad" => 1],
    ["nombre" => "Samuel", "peso" => 5, "edad" => 2],
    ["nombre" => "Maris", "peso" => 4, "edad" => 3],
    ["nombre" => "Kellie", "peso" => 2, "edad" => 3],
    ["nombre" => "Vernon", "peso" => 5, "edad" => 1],
    ["nombre" => "Chanda", "peso" => 10, "edad" => 1],
    ["nombre" => "Rosalyn", "peso" => 7, "edad" => 3],
    ["nombre" => "Brynne", "peso" => 4, "edad" => 14],
    ["nombre" => "Blaze", "peso" => 8, "edad" => 1],
    ["nombre" => "Kane", "peso" => 1, "edad" => 3],
    ["nombre" => "Elizabeth", "peso" => 9, "edad" => 2],
    ["nombre" => "Reed", "peso" => 3, "edad" => 11],
    ["nombre" => "Emerson", "peso" => 9, "edad" => 6],
    ["nombre" => "August", "peso" => 7, "edad" => 5],
    ["nombre" => "Liberty", "peso" => 9, "edad" => 4],
    ["nombre" => "Louis", "peso" => 1, "edad" => 9],
    ["nombre" => "Zephania", "peso" => 2, "edad" => 12],
    ["nombre" => "Kasper", "peso" => 9, "edad" => 6],
    ["nombre" => "Bruno", "peso" => 4, "edad" => 13],
    ["nombre" => "Oscar", "peso" => 4, "edad" => 1],
    ["nombre" => "Casey", "peso" => 2, "edad" => 4],
    ["nombre" => "Oleg", "peso" => 3, "edad" => 12],
    ["nombre" => "Colleen", "peso" => 6, "edad" => 12],
    ["nombre" => "Vivien", "peso" => 5, "edad" => 4],
    ["nombre" => "Kaitlin", "peso" => 5, "edad" => 4],
    ["nombre" => "Sarah", "peso" => 4, "edad" => 3],
    ["nombre" => "Valentine", "peso" => 3, "edad" => 11],
    ["nombre" => "Jared", "peso" => 2, "edad" => 14],
    ["nombre" => "Dolan", "peso" => 1, "edad" => 15],
    ["nombre" => "Lavinia", "peso" => 5, "edad" => 7],
    ["nombre" => "Wesley", "peso" => 7, "edad" => 12],
    ["nombre" => "Kai", "peso" => 10, "edad" => 12],
    ["nombre" => "Orla", "peso" => 9, "edad" => 4],
    ["nombre" => "Sandra", "peso" => 1, "edad" => 9],
    ["nombre" => "Jaden", "peso" => 8, "edad" => 15],
    ["nombre" => "Rowan", "peso" => 3, "edad" => 15],
    ["nombre" => "Zachery", "peso" => 3, "edad" => 10],
    ["nombre" => "Orlando", "peso" => 3, "edad" => 4],
    ["nombre" => "Zelda", "peso" => 5, "edad" => 13],
    ["nombre" => "Scott", "peso" => 7, "edad" => 3],
    ["nombre" => "Thor", "peso" => 10, "edad" => 2],
    ["nombre" => "Cameran", "peso" => 5, "edad" => 8],
    ["nombre" => "Tallulah", "peso" => 7, "edad" => 15],
    ["nombre" => "Fulton", "peso" => 1, "edad" => 4],
    ["nombre" => "Molly", "peso" => 7, "edad" => 10],
    ["nombre" => "Eden", "peso" => 8, "edad" => 13],
    ["nombre" => "Teagan", "peso" => 3, "edad" => 12],
    ["nombre" => "Price", "peso" => 9, "edad" => 4],
    ["nombre" => "Lucy", "peso" => 3, "edad" => 12],
    ["nombre" => "Raphael", "peso" => 5, "edad" => 1],
    ["nombre" => "Chloe", "peso" => 9, "edad" => 10],
    ["nombre" => "Chelsea", "peso" => 6, "edad" => 8],
    ["nombre" => "Paloma", "peso" => 7, "edad" => 12],
    ["nombre" => "Brock", "peso" => 6, "edad" => 13],
    ["nombre" => "Sebastian", "peso" => 9, "edad" => 4],
    ["nombre" => "Alexis", "peso" => 2, "edad" => 10],
    ["nombre" => "Alfonso", "peso" => 2, "edad" => 5],
    ["nombre" => "Cathleen", "peso" => 3, "edad" => 13],
    ["nombre" => "Barclay", "peso" => 5, "edad" => 14],
    ["nombre" => "Chiquita", "peso" => 1, "edad" => 11],
    ["nombre" => "Alvin", "peso" => 2, "edad" => 5],
    ["nombre" => "Berk", "peso" => 3, "edad" => 3],
    ["nombre" => "Aurora", "peso" => 10, "edad" => 3],
    ["nombre" => "Aretha", "peso" => 6, "edad" => 5],
    ["nombre" => "Iola", "peso" => 8, "edad" => 14],
    ["nombre" => "Noah", "peso" => 10, "edad" => 3],
    ["nombre" => "Regan", "peso" => 10, "edad" => 13],
    ["nombre" => "Amela", "peso" => 1, "edad" => 3],
    ["nombre" => "TaShya", "peso" => 3, "edad" => 6],
    ["nombre" => "Daphne", "peso" => 7, "edad" => 13],
];

function sobrePeso($nombre, &$datos) {
    foreach ($datos as $dato) {
        if ($dato["nombre"] == $nombre) {
            $edad = $dato["edad"];
            $peso = $dato["peso"];

            $edadHumana = edadHumana($edad);

            if ($edadHumana >= 60) {
                return $peso > 7;
            } elseif ($edadHumana < 40) {
                return $peso > 3;
            } else {
                return $peso > 6;
            }
        }
    }
}

function edadHumana($edad) {
    return 31 + 16 * $edad;
}

$datos = [
    ["nombre" => "Max", "edad" => 4, "peso" => 6],
    ["nombre" => "Buddy", "edad" => 6, "peso" => 9],
    ["nombre" => "Charlie", "edad" => 8, "peso" => 10],
];

$contador = 0;

foreach ($datos as $dato) {
    if (sobrePeso($dato["nombre"], $datos)) {
        $contador++;
    }
}

$porcentaje = ($contador / count($datos)) * 100;

echo "El porcentaje de perros que tienen sobre-peso es: " . $porcentaje . "%";

?>