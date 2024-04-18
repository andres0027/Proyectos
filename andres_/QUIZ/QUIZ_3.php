<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZ</title>
</head>
<body>
<center>
<form action="<?php $_PHP_SELF ?>" method="POST">
   Nombre de la fruta: <input type="text" name="nombre"><br />
   Precio de la fruta: <input type="number" step="any" name="precio"><br /><br />
   <input type="submit" value="Enviar Datos"/>
</form>  

<?php
 $productos = array(
     'Manzanas' => 2.5,
     'Plátanos' => 1.8,
     'Naranjas' => 3.2,
     'Peras' => 2.0
 );
     echo "<table border ='5'>";
     echo "<tr><th>Fruta</th><th>Precio</th></tr>";
 foreach ($productos as $frutas => $precio) {
     echo "<tr><td>$frutas</td><td>$precio</td><tr>";
 }
 if (isset($_REQUEST['nombre']) && isset($_REQUEST['precio'])) {
    $nuevoProducto = array(
        $_REQUEST['nombre'] => $_REQUEST['precio']
    );
    $productos[] = $nuevoProducto;
 foreach ($nuevoProducto as $frutas => $precio) {
     echo "<td>".$frutas."</td><td>".$precio."</td></tr>";
 }
 echo "<table/>";
 echo "<a href='index.html'>Volver</a> ";
 }
?>
</center>


</body>
</html>