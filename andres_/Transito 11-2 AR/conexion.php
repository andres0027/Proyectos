<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "transito";
$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " .$conn->connect_error);
}
?>