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

$precio = 0;
$cantidad = 0;
$categoria = "";
$total = 0;
$cuota = 0;
$valorPrecio= 0;

if(isset($_POST['categoria'])){
    $valor = $_POST['categoria'];
}

if(isset($_POST['precio'])){
    $precio = $_POST['precio'];
}

if(isset($_POST['cantidad'])){
    $cantidad = $_POST['cantidad'];
}

if(isset($_POST['cuota'])){
    $cuota = $_POST['cuota'];
}

$categorias = array(
    array("id"=> 1,"nombre"=>"Tostadora","valor"=>20),
    array("id"=> 2,"nombre"=>"Lavavajillas","valor"=>150),
    array("id"=> 3,"nombre"=>"Lavadora","valor"=>200),
    array("id"=> 4,"nombre"=>"Frigorífico","valor"=>350)
);

function calcularPrecio($valorPrecio,$cantidad){
    
    $total=$valorPrecio*$cantidad;
    
    return $total;
}

?>

    <form action="formularioVentas.php" method="post">
        <h1>VENTA DE PRODUCTOS</h1>
        Producto 
        <select name="categoria" size="1">
        <?php

            foreach($categorias as $categoria){

                $seleccion="";
                if($valor==$categoria['id']){
                    $seleccion="selected";  
                    $valorPrecio=$categoria['valor'];
                }
                echo '<option value= "'. $categoria['id'] .'"  '. $seleccion .' >'.$categoria['nombre'].'</option>';
            }
        ?>
        </select>

        <br><br>
        Precio <input type="text" name="precio" value="<?php echo $valorPrecio ?>"><br><br>
        Cantidad <input type="text" name="cantidad" value="<?php echo $cantidad ?>"><br><br>
        Total <input type="text" name="total" value="<?php echo calcularPrecio($valorPrecio,$cantidad) ?>"><br><br>
        Cuotas <select name="cuota">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select> <br><br>
        Nº Letras   Monto
        <br><br>
<?php
    if($valorPrecio==0){
        echo '<p><input type="submit" value="Calcular precio"></p>';
        echo '<p><input type="reset" value="Limpiar"></p>';
    }

    if($valorPrecio>0 && $total==0){
        echo '<p><input type="submit" value="Calcular total"></p>';
    }

    if($total){
        echo '<p><input type="submit" value="Calcular precio"></p>';

    }

?>
    </form>
</body>
</html>