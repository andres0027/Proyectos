<?php
function ejercicio3()
{
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
  
    $nombre1 = $_POST['nombre1'];
    $nombre2 = $_POST['nombre2'];
    $nombre3 = $_POST['nombre3'];
    $descrpcion1 = $_POST['descripcion1'];
    $descrpcion2 = $_POST['descripcion2'];
    $descrpcion3 = $_POST['descripcion3'];

    $tareas = [
      array('nombre' => $nombre1, 'descripcion' => $descrpcion1),
      array('nombre' => $nombre2, 'descripcion' => $descrpcion2),
      array('nombre' => $nombre3, 'descripcion' => $descrpcion3)
    ];

    foreach($tareas as $val){
      echo "<center>Nombre tarea: ". $val['nombre'];
      echo " Descripcion de la tarea: ". $val['descripcion'];
      echo "</center><br>";
    }
  
    die;
  }
}
ejercicio3();
?>
