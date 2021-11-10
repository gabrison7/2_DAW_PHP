<?php

include_once 'conexion.php';

// Carga la configuración

$config = parse_ini_file('datosConexion.ini');

obtenerConexionMysql($config);

obtenerConexionPDO($config);

?>