<?php

$i = 1;
$meses = intval($_POST["meses"]);
$clientes = intval($_POST["clientes"]);

$cantidad = $meses * $clientes;

$facturas = [];

do {
  
  $facturas[$i] = uniqid();

  $i = $i + 1;
} while ($i <= $cantidad);

print_r($facturas);
die;
?>