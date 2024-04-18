<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $opcion = $_POST["menu"];
    switch ($opcion) {
        case "1":
            $plato = "Gaseosa";
            $precio = 3500;
            break;
        case "2":
            $plato = "Sandwich";
            $precio = 8700;
            break;
        case "3":
            $plato = "Perro";
            $precio = 5500;
            break;
        case "4":
            $plato = "Pizza";
            $precio = 4000;
            break;
        case "5":
            $plato = "Hamburguesa";
            $precio = 6000;
            break;
        case "6":
            $plato = "Pastel de pollo";
            $precio = 2500;
            break;
        default:
            $plato = "Opción no válida";
            $precio = 0;
    }
    
    echo "<div class='container'><div class='mensaje'>Plato seleccionado: " . htmlspecialchars($plato) . " - Precio: $" . htmlspecialchars($precio) . "</div></div>";
}
?>
