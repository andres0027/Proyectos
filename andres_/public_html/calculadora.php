<?php
    $valor = $_POST['pago'];

    if (is_numeric($valor)) {
        if ($valor > 100) {
            $descuento = $valor * 0.10;
            $total = $valor - $descuento;
            echo "Descuento del 10%: " . $descuento . "\n";
            echo "Total a pagar: " . $total . "\n";
        } else if ($valor > 50 && $valor <= 100) {
            $descuento = $valor * 0.05;
            $total = $valor - $descuento;
            echo "Descuento del 5%: " . $descuento . "\n";
            echo "Total a pagar: " . $total . "\n";
        } else if ($valor < 50) {
            echo "No aplica descuento.\n";
            echo "Total a pagar: " . $valor . "\n";
        }
    } else {
        echo "Error en el valor ingresado.\n";
    }
?>