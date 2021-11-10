<?php

include_once 'conexion.php';

// Carga la configuración

$config = parse_ini_file('datosConexion.ini');

$conexionMySQL = obtenerConexionMysql($config);

$conexionPDO = obtenerConexionPDO($config);

// Comprobar la conexión

if (!$conexionPDO) {

die("Error en la conexión: " . mysqli_connect_error());

}


//CONSTRUIMOS LA SENTENCIA SQL

$sql = "INSERT INTO participantes (nombre, numero,email) VALUES ('Luis', 23, 'luismr@ies.es')";


//EJECUTAMOS LA SENTENCIA

if (mysqli_query($conexionMySQL, $sql)) {

echo "<p>Nueva fila creada con éxito";

} else {

echo "Error: " . $sql . "<br>" . mysqli_error($conexionMySQL);

}


// CERRAR LA CONEXIÓN

mysqli_close($conexionMySQL);


?>