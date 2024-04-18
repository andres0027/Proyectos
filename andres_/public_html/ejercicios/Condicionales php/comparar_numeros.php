<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $numero3 = $_POST["numero3"];

    $numeros = array_map('floatval', [$numero1, $numero2, $numero3]);

    if ($numero1 == $numero2 && $numero2 == $numero3) {
        echo "Los números son iguales.";
    } else {
        sort($numeros, SORT_NUMERIC);
        echo "Menor: " . $numeros[0] . "<br>";
        echo "Medio: " . ($numeros[1] != $numeros[0] && $numeros[1] != $numeros[2] ? $numeros[1] : "No hay un número medio") . "<br>";
        echo "Mayor: " . $numeros[2];
    }
}
?>
