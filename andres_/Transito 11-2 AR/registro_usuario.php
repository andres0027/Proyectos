<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="registro_usuario.php" method="post">
        Cedula: <input type="number" name="cedula" id="cedula" required> <br>
        Nombre: <input type="text" name="nombre" id="nombre" required> <br>
        Apellido: <input type="text" name="apellido" id="apellido" required><br>
        Licencia: <input type="number" name="licencia" id="licencia" required><br>
        Correo: <input type="email" name="correo" id="correo" required><br>
        Telefono: <input type="number" name="telefono" id="telefono" required><br>
        <input type="submit" value="registrar"><br>
        <a href="index.php">Devolver</a>
    </form>
</body>
</html>

<?php

    include 'conexion.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cedula = $_POST['cedula'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $licencia = $_POST['licencia'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];
        $stmt = $conn->prepare("INSERT INTO propietario (cedula, nombre, apellido, licencia, correo, telefono) VALUES (?,?,?,?,?,?)");
        $stmt->bind_param("isssss", $cedula, $nombre, $apellido, $licencia, $correo, $telefono);

        if($stmt->execute()) {
            echo "<script>alert('Registrado con exito')</script>";
        } else {
            echo "<script>alert('No se pudo registrar')</script>";
        }

        $stmt->close();
    }

    $conn->close();
    ?>