<?php

include_once 'datosconexionBD.php';


function obtenerConexionMysql($config)
{

    $server = "localhost";

    $usuario = "usuariodaw";

    $clave = "admin1234";

    //Conexión con los datos del 'config.ini'

    //Método mysqli

    $conexion = mysqli_connect($config['host'], $config['username'], $config['password'], $config['dbname']);

    //$bbdd="nombreBaseDatos";

    $con = mysqli_connect(SERVIDOR, USUARIO, CLAVE) or die("Problemas con la conexión a la base de datos:" . mysqli_connect_error());


    echo "<p>Conexión realizada con MySQL";

    mysqli_set_charset($con, 'utf8');

    return $con;
}

/* Recibe el nombre de la base de datos que queremos usar.*/

/* Si no se indica ningún nombre de la bases de datos se pasa cadena '' como valor por defecto.*/

function obtenerConexionPDO($config,$BD = '')

{

    /* Intentamos establecer una conexión con el servidor.*/

    try {

        if ($BD == '') {

            $conexion = new PDO("mysql:host=" . $config['host'] . ";charset=utf8", $config['username'], $config['password']);
        } else {

            $conexion  = new PDO("mysql:host=" . $config['host'] . ";dbname=" . $config['dbname'] . ";charset=utf8", $config['username'], $config['password']);
        }

        /* Establecemos atributos para configurar la conexión PDO*/

        $conexion->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);

        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "<p>Conexión realizada con PDO";

        return ($conexion);
    } catch (PDOException $e) {

        die("<p><H3>No se ha podido establecer la conexión.

                 <p>Compruebe si está activado el servidor de bases dedatos MySQL.</H3></p>\n <p>Error: " . $e->getMessage() . "</p>\n");

        exit();
    } // end try

}
