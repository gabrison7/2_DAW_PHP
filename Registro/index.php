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
    $archivo = 'registro.txt';

    if (file_exists($archivo)) {

        $abrir = fopen($archivo, "a");

        $tiempo = 'Registro realizado el: ' .date("d/m/Y - G:i:s").chr(13).chr(10);

        fwrite($abrir, $tiempo);
    } else {
        echo 'El archivo no existe';
    }
    ?>
    <button><a href="index.php">Aceptar</a></button>
</body>

</html>