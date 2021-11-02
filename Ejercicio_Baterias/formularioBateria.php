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

    $id ="";
    $tipo = "";
    $modelo = "";
    $carga = "";
    $capacidad = "";
    $ciclos = "";
    $estado = "";

    if (isset($_POST['id'])) {
        $id = $_POST['id'];
    }

    if (isset($_POST['tipo'])) {
        $tipo = $_POST['tipo'];
    }
    if (isset($_POST['modelo'])) {
        $modelo = $_POST['modelo'];
    }

    if (isset($_POST['carga'])) {
        $carga = $_POST['carga'];
    }

    if (isset($_POST['capacidad'])) {
        $capacidad = $_POST['capacidad'];
    }
    if (isset($_POST['ciclos'])) {
        $ciclos = $_POST['ciclos'];
    }
    if (isset($_POST['estado'])) {
        $estado = $_POST['estado'];
    }


    //$baterias = array("id" => $id,"tipo"=>$tipo,"modelo"=>$modelo,"carga"=>$carga,"capacidad"=>$capacidad,"ciclos"=>$ciclos,"estado"=>$estado);

    $archivo = "baterias.txt";

    $abrir = fopen($archivo, "w");

    if (!file_exists($archivo)) {
        echo 'El archivo no existe';
    } else {

        $elemento = $id.'-'.$carga;

        fwrite($abrir, $elemento);

        fclose($abrir);
    }
    ?>


    <form action="formularioBateria.php" method="post">
        Codigo <input type="text" id="id" name="id"><br><br>
        Tipo &nbsp;&nbsp;<select name="tipo" id="tipo">
            <option value="1">Tipo 1</option>
            <option value="2">Tipo 2</option>
            <option value="3">Tipo 3</option>
        </select><br><br>
        Modelo <input type="text" name="modelo" id="modelo"><br><br>
        Carga <input type="text" id="carga" name="carga"><br><br>
        Capacidad <input type="text" id="capacidad">&nbsp;&nbsp;mA<br><br>
        Ciclos de vida <input type="text" id="ciclos"><br><br>
        Estado <input type="text" id="estado"><br><br>
        <input type="submit" value="Enviar">
        <a href="seguimientoBaterias.php"><input type="submit" value="Seguimiento"></a>

        <!-- 
    Estacion
    Fecha entrega
    Matrícula entrada
    Matrícula salida -->
    </form>
</body>

</html>