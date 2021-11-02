<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-3">

<?php 

echo "<h2>APLICACION DAW</h2>";

$usuario = "Alejandro";
$curso = "2DAW";

?>

<p><?php
    // echo $usuario.'-'.$curso;
    // echo '<br>';
    // $valores = [10,20,30];

    // for($i=0;$i<3;$i++){
    //     echo $valores[$i].' ';
    // }

    echo '<a href="a.php" class="btn btn-info" role="button">Compras</a>'; 
?></p>

<?php

  $array = [[5, 10, 15],

            [10, 20, 30],

            [100, 200, 300]];

  

// Mostramos mensaje con el índice de cada  array y los valores que contiene


echo '<table class="table">
    <thead>
    <tr>
    <th>Valor 1</th>
    <th>Valor 2</th>
    <th>Valor 3</th>
    <th></th>
    <th></th>
    </tr>
    </thead>
    <tbody>';


  for($i=0; $i<count($array); $i++) {

    echo '<tr>';


    for($x=0; $x<count($array[$i]); $x++) {
        echo '<td>';

      echo $array[$i][$x];

      echo '</td>';

    } // fin de bucle inferior

    echo "</p>";

    echo '<td>
    <a href="#" class="btn btn-info" role="button">Editar</a>
    </td>
    <td>
    <a href="#" class="btn btn-danger" role="button">Eliminar</a>
    </td>';

    echo '</tr>';
  } // fin de bucle superior

  echo '</tbody>
  </table>';

?>
