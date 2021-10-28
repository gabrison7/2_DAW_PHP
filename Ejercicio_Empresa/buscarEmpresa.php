<?php

include_once 'datosEmpresa.php';

if(isset('departamento')){
    $departamento = $_POST['departamento'];
}

$contador = 0;

foreach($datos as $empresa){

    if($empresa['DEPARTAMENTO'] == $departamento){

        $contador++;

        echo 'Existen '.$contador.' departamentos de '. $departamento;
    }
}



?>