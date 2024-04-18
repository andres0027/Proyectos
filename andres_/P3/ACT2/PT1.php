<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capitales</title>
</head>
<body>
    <?php
    echo"<center>";
    $CiudadesColombia = array(
        array("Bogotá", "Cundinamarca"),
        array("Medellín", "Antioquia"),
        array("Barranquilla", "Atlántico")
    );

    echo "<h2>Capitales de Colombia</h2>";
    echo "<p>Número de ciudades: " . count($CiudadesColombia) . "</p>";

    echo "<table border='1'>";
    echo "<tr><th>Ciudad</th><th>Departamento</th></tr>";

    foreach ($CiudadesColombia as $ciudad) {
        echo"<tr>";
        foreach($ciudad as $detale) {
            echo"<td>$detale</td>";
        }
        echo"</tr>\n";
    }
echo "</table>";
echo "</center>";
?>
</body>
</html>