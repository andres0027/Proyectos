<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $placa_busqueda = $_POST['placa_busqueda'];
    $stmt = $conn->prepare("SELECT * FROM vehiculo WHERE placa = ?");
    $stmt->bind_param("s", $placa_busqueda);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $vehiculo = $result->fetch_assoc();
        include 'mostrar_vehiculo.php';
    } else {
        echo "<script>alert('No se encontró el vehículo con esa placa')</script>";
    }

    $stmt->close();
}

$conn->close();
?>