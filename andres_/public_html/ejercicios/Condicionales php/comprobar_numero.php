<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];
    if ($numero > 0) {
        echo "<div class='mensaje positivo'>El número es positivo</div>";
    } elseif ($numero < 0) {
        echo "<div class='mensaje negativo'>El número es negativo</div>";
    } else {
        echo "<div class='mensaje cero'>Has ingresado el número cero</div>";
    }
}
?>