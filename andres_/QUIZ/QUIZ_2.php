<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZ</title>
</head>
<body>

<?php

    echo "<center>";
    $productos = array(
        'Manzanas' => 2.5,
        'Plátanos' => 1.8,
        'Naranjas' => 3.2,
        'Peras' => 2.0
    );
        echo "<table border ='5'>";
        echo "<tr><th>Fruta</th><th>Precio</th></tr>";
    foreach ($productos as $frutas => $precio) {
        echo "<tr><td>$frutas</td><td>$precio</td></tr>";
    }
    echo "<table/>";

    echo "<p> El producto mas caro es: </p>";
    $max = max(array_values($productos));
    $clave = array_search($max, $productos);
    echo "La fruta mas cara es: $clave, con un precio de: $max <br>";
    echo "<a href='index.html'>Volver</a> ";


    echo "<center/>";
    

?>






</body>
</html>