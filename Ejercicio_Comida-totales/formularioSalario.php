<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$empleado = "";
$horas = "";
$categoria = "";
$valorHora="";
$porcentaje = 0.15;

if(isset($_POST['empleado'])){
    $empleado = $_POST['empleado'];
}

if(isset($_POST['horas'])){
    $horas = $_POST['horas'];
}

if(isset($_POST['categoria'])){
    $valor_hora_categoria = $_POST['categoria'];
}

$categorias = array(

    array("id"=> 1,"nombre"=>"Jefe","valor"=>50),

    array("id"=> 2,"nombre"=>"Administrativo","valor"=>30),

    array("id"=> 3,"nombre"=>"Operario","valor"=>15),

    array("id"=> 4,"nombre"=>"Becario","valor"=>6)

);

function calcularBruto($horas,$valorHora){
    $salario_bruto=$horas*$valorHora;

    return $salario_bruto;
}

function calcularDescuento($salario_bruto,$porcentaje){
    
    $descuento=$salario_bruto*$porcentaje;
    
    return $descuento;
}

function calcularNeto($salario_bruto,$descuento){
    
    $salario_neto=$salario_bruto-$descuento;
    
    return $salario_neto;
}

?>

    <form action="formularioSalario.php" method="post">
        Empleado: <input type="text" name="empleado" value="<?php echo $empleado ?>"><br><br>
        Horas: <input type="text" name="horas" value="<?php echo $horas ?>"><br><br>
        Categoria 

        <select name="categoria" size="1">
        <?php

            foreach($categorias as $categoria){

                $seleccion="";
                if($valor_hora_categoria==$categoria['id']){
                    $seleccion="selected";  
                    $valorHora = $categoria['valor'];
                }
                echo '<option value= "'. $categoria['id'] .'"  '. $seleccion .' >'.$categoria['nombre'].'</option>';
            }
        ?>
        </select>

        <?php

            echo '<p>
            Salario bruto';

            if($horas!=""){
                $salario_bruto= calcularBruto($horas,$valorHora);
                echo $salario_bruto.' euros';
            } else{
                echo '0 euros';
            }
            echo '</p>';

            echo '<p>
            Descuento';

            if($horas!=""){
                $descuento= calcularDescuento($salario_bruto,$porcentaje);
                echo $descuento.' euros';
            } else{
                echo '0 euros';
            }
            echo '</p>';

            echo '<p>
            Descuento';

            if($horas!=""){
                $salario_neto= calcularNeto($salario_bruto,$descuento);
                echo $salario_neto.' euros';
            } else{
                echo '0 euros';
            }
            echo '</p>';

        ?>
        <input type="submit" value="Calcular">
        <input type="reset" value="Limpiar">
    </form>
</body>
</html>