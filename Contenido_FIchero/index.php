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
    $archivo = "formatos.txt";

    if (file_exists($archivo)) {

        $abrir = fopen($archivo, "r");

        $contenido = fread($abrir, filesize($archivo));

        echo $contenido;
    } else{
        echo 'El archivo no existe';
    }
    ?>
</body>

</html>