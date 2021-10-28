<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php



    ?>

    <form action="formularioNotas.php" method="post">
        <?php


        ?>

        <?php

        $promedio = 0;

        $notas = array(

            array("id" => 1, "nombre" => "Luz Lázaro", "val" => 17),

            array("id" => 2, "nombre" => "Ángela Torres", "val" => 18),

            array("id" => 3, "nombre" => "Fernanda Lázaro", "val" => 20),

            array("id" => 4, "nombre" => "Manuel Torres", "val" => 19),

            array("id" => 5, "nombre" => "Lucero Mendoza", "val" => 14),

            array("id" => 6, "nombre" => "Alejandra Menor", "val" => 16),

            array("id" => 7, "nombre" => "Victoria Bautista", "val" => 12),

            array("id" => 8, "nombre" => "Francisco Malaver", "val" => 11)

        );

        echo '<table>';
        echo '<tr>';
        echo '<td>Nº Orden</td>';
        echo '<td>Alumno</td>';
        echo '<td>Promedio</td>';
        echo '</tr>';
        echo '<tr>';

        foreach ($notas as $nota) {

            $total = 0;

            foreach ($nota['valor'] as $promedio) {
                $total += $promedio;
            }

            echo '<td>' .  $nota['id'] . '</td><td>' . $nota['nombre'] . '</td><td>' . $total . '  </td>';
        }

        echo '</tr>';
        echo '</table>';

        ?>
    </form>
</body>

</html>