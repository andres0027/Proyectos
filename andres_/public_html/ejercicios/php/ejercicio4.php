<?php

function ejercicio1()
{
  // Verifica si se recibió una solicitud POST
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtiene la cantidad del cuerpo de la solicitud POST

    $i = 1;
    $total = 0;
    $num = COUNT($_POST);

    while($i <= 7){

      $total = $total + $_POST["input_".$i];
      $t=$total/7;
      $i = $i + 1;
    }
    echo $t;
    exit();
  } else {
    // Si la solicitud no es POST, devolver un mensaje de error o manejar de acuerdo a tus necesidades
    echo json_encode(['error' => 'Método no permitido']);
    exit();
  }
}

ejercicio1();