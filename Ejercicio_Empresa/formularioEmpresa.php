<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa</title>
</head>
<?php
    include_once ('datosEmpresa.php');
//Crear un array para almacenar los departamentos
$departamentos = array();
//Recorrer el array de empresas

    foreach($datos as $empresa){

        //Por cada empresa, preguntar si el array departamentos contiene el departamento

        if(!in_array($empresa['DEPARTAMENTO'],$departamentos)){
            array_push($departamentos, $empresa['DEPARTAMENTO']);
        }

        //Si no lo contiene, se añade al departamento al array
    }
    
    print_r($departamentos);

    echo "<select name='departamento'>";
    foreach($departamentos as $departamento){
        echo "<option value='".$departamento."'>".$departamento."</option>";
    }

    echo "</select>";
?>
<body>

<form action="datosEmpresa.php" method="post">

Departamento: <br><input type="text" name="departamento"><br><br>

<input type="submit" value="Enviar">

</form>
</body>
</html>