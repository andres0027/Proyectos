<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero Aleatorios</title>
</head>
<body>
    <center>
    <?php

    $numero = array();
    for ($i=0; $i <10 ; $i++) { 
        $numero[$i] = rand(1,100);
    }

    $par = array();
    $impar = array();

    foreach ($numero as $resultado) {
        if ($resultado % 2 == 0) {
            $par[] = $resultado;
        } else {
            $impar[] = $resultado;
        }
    }
    ?>

    <table>
        <tr><td>Número</td><td></td><td></td></tr>

        <?php
            for ($i=0; $i <10 ; $i++) { 
                echo"<tr><td>".$numero[$i]."</td>";
                if (in_array($numero[$i], $par)) {
                    echo "<td>Par</td>";
                } else {
                    echo "<td></td>";
                }
                if (in_array($numero[$i], $impar)) {
                    echo "<td>Impar</td></tr>";
                } else {
                    echo "<td></td></tr>";
                }
            }
        ?>
    </table>
    </center>
</body>
</html>