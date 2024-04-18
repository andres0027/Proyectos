<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cedula = $_POST['cedula'];

    $stmt = $conn->prepare("SELECT * FROM propietario WHERE cedula = ?");
    $stmt->bind_param("i", $cedula);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $stmt = $conn->prepare("DELETE FROM propietario WHERE cedula = ?");
        $stmt->bind_param("i", $cedula);

        if ($stmt->execute()) {
            echo "<script>alert('Cuenta eliminada exitosamente')</script>";
        } else {
            echo "<script>alert('No se pudo eliminar la cuenta')</script>";
        }
    } else {
        echo "<script>alert('No se pudo encontrar la cuenta')</script>";
    }

    $stmt->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Cuenta</title>
</head>
<body>
    <form action="eliminar_cuenta.php" method="post">
        Ingresa tu cédula para confirmar la eliminación de tu cuenta: <input type="number" name="cedula" id="cedula" required> <br>
        <input type="submit" value="Eliminar Cuenta">
    </form>
    <br>
    <a href="index.php">Volver al inicio</a>
</body>
</html>