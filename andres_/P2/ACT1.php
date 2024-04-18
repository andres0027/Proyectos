<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
<?php

$notas = [
    "estudiantes" => [
        [
            "nombre" => "Estudiante 1",
            "matematicas" => 85,
            "ciencias" => 92,
            "literatura" => 88,
        ],
        [
            "nombre" => "Estudiante 2",
            "matematicas" => 78,
            "ciencias" => 65,
            "literatura" => 90,
        ],
        [
            "nombre" => "Estudiante 3",
            "matematicas" => 91,
            "ciencias" => 85,
            "literatura" => 76,
        ],
    ]
];

function display_student_record($student)
{
    echo "Nombre: " . $student['nombre'] . "<br>";
    echo "Matemáticas: " . $student["matematicas"] . "<br>";
    echo "Ciencias: " . $student["ciencias"] . "<br>";
    echo "Literatura: " . $student["literatura"] . "<br>";
    echo "------------------------<br>";
}

echo "Registro de Notas Escolares:<br>\n";
foreach ($notas["estudiantes"] as $student) {
    display_student_record($student);
}

?>
</center>
</body>
</html>