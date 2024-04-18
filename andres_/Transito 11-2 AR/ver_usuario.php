<?php

include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cedula = $_POST['cedula'];

    $stmt = $conn->prepare("SELECT * FROM propietario WHERE cedula = ?");
    $stmt->bind_param("i", $cedula);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $usuario = $result->fetch_assoc();
        echo "Nombre: " . $usuario['nombre'] . "<br>";
        echo "Apellido: " . $usuario['apellido'] . "<br>";
        echo "Licencia: " . $usuario['licencia'] . "<br>";
        echo "Correo: " . $usuario['correo'] . "<br>";
        echo "Teléfono: " . $usuario['telefono'] . "<br>";
    } else {
        echo "<script>alert('No se encontró el usuario con esa cédula')</script>";
    }

    $stmt->close();
}

$conn->close();
?>