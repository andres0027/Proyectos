<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de notas</title>
</head>
<body>
    
<?php
echo "<center>";
$nota = array(
    "Matematicas"=> array(
        "Mitocondria" => Bajo,
        "Celula" => Superior,
        "Plaqueta" => Basico
    ),
    "Ciencias" => array(
        "Mitocondria" => Alto,
        "Celula" => Basico,
        "Plaqueta" => Superior
    ),
    "Literatura" => array(
        "Mitocondria" => Superior,
        "Celula" => Alto,
        "Plaqueta" => Bajo
    )
);

foreach ($nota as $asignatura => $notas_estudiante) {
    echo "<h2>$asignatura</h2>";
    echo "<table>";
    echo "<tr><th>Estudiante</th><th>Nota</th></tr>";
    foreach ($notas_estudiante as $estudiante => $nota) {
        echo "<tr><td>$estudiante</td><td>$nota</td></tr>";
    }
    echo "</table>";
}
echo "</center>";
?>


</body>
</html>