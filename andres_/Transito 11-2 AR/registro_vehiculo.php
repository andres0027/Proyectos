<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="registro_vehiculo.php" method="post">
        Placa: <input type="text" name="placa" id="placa" required> <br>
        Tipo: <input type="text" name="tipo" id="tipo" required> <br>
        Cilindraje: <input type="text" name="cilindraje" id="cilindraje" required><br>
        Numero de motor: <input type="text" name="num_motor" id="num_motor" required><br>
        Numero de chasis: <input type="text" name="num_chasis" id="num_chasis" required><br>
        Marca: <input type="text" name="marca" id="marca" required><br>
        Técnico Mecánica: <input type="date" name="tecnico_mecanica" id="tecnico_mecanica" required><br>
        SOAT: <input type="date" name="fecha_soat" id="fecha_soat" required><br>
        Clase: <input type="text" name="clase" id="clase" required><br>
        Color: <input type="text" name="color" id="color" required><br>
        <input type="submit" value="registrar"><br>
        <a href="index.php">Devolver</a>
    </form>
</body>
</html>

<?php

    include 'conexion.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $placa = $_POST['placa'];
        $tipo = $_POST['tipo'];
        $cilindraje = $_POST['cilindraje'];
        $num_motor = $_POST['num_motor'];
        $num_chasis = $_POST['num_chasis'];
        $marca = $_POST['marca'];
        $tecnico_mecanica = $_POST['tecnico_mecanica'];
        $fecha_soat = $_POST['fecha_soat'];
        $clase = $_POST['clase'];
        $color = $_POST['color'];
        $stmt = $conn->prepare("INSERT INTO vehiculo (placa, tipo, cilindraje, num_motor, num_chasis, marca, tecnico_mecanica, fecha_soat, clase, color) VALUES (?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssissss", $placa, $tipo, $cilindraje, $num_motor, $num_chasis, $marca, $tecnico_mecanica, $fecha_soat, $clase, $color);

        if($stmt->execute()) {
            echo "<script>alert('Registrado con exito')</script>";
        } else {
            echo "<script>alert('No se pudo registrar')</script>";
        }

        $stmt->close();
    }

    $conn->close();
    ?>