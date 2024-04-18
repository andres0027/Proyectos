<?php
session_start(); 
include("conexion.php"); 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
$username = $_POST['username']; 
$password = $_POST['password']; 
$sql = "SELECT * FROM usuarios WHERE username = '$username' AND password =
'$password'"; 
$result = $conn->query($sql); 
if ($result->num_rows == 1) { 

$_SESSION['loggedin'] = true; 
$_SESSION['username'] = $username; 
header("location: index.php"); 
} else {
echo "<script>alert('Usuario o contraseña incorrectos'); window.location.href
= 'login.php';</script>";
}
}
?>