<?php

include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $placa = $_POST['placa'];

    $stmt = $conn->prepare("SELECT * FROM vehiculo WHERE placa = ?");
    $stmt->bind_param("s", $placa);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $stmt = $conn->prepare("DELETE FROM vehiculo WHERE placa = ?");
        $stmt->bind_param("s", $placa);

        if ($stmt->execute()) {
            echo "<script>alert('Vehículo eliminado exitosamente')</script>";
        } else {
            echo "<script>alert('No se pudo eliminar el vehículo')</script>";
        }
    } else {
        echo "<script>alert('No se encontró ningún vehículo con esa placa')</script>";
    }

    $stmt->close();
}

$conn->close();
?>