<?php


include_once 'cabecera.php';


$productos = array(


   array("id"=>1,"nombre"=>"Ensalada de frutas","valor"=>10),

   array("id"=>2,"nombre"=>"Hamburguesa","valor"=>4.90),

   array("id"=>3,"nombre"=>"Bocadillo","valor"=>5),

   array("id"=>4,"nombre"=>"Sandwich","valor"=>3),

   array("id"=>5,"nombre"=>"Papas con calamares","valor"=>10),

   array("id"=>6,"nombre"=>"Callos a la madrileña","valor"=>10),

   array("id"=>7,"nombre"=>"Gaspacho andaluz","valor"=>8),

   array("id"=>8,"nombre"=>"Migas extremañas","valor"=>6)


);


   $cantidades = array();

   foreach($productos as $producto){

      

       if(isset($_POST['cantidad_'.$producto['id']])){

           //array_push($cantidades,$_POST['cantidad_'.$producto['id']]);

           $cantidad = $_POST['cantidad_'.$producto['id']];

          

           $datos = array();

           $datos['cantidad']=$cantidad;

           $datos['precio_parcial']=(int)$cantidad*(int)$producto['valor'];

           $cantidades[$producto['id']]=$datos;


       }

   }


   echo '</table>';

?>


  <form action="pedidoComida.php" method='POST'>



<?php

 

  crearTabla($productos,$cantidades);


?>


<p><input type="submit" value="Hacer pedido" ></p>

</form>

<?php


include_once 'cabecera.php';


$productos = array(


   array("id"=>1,"nombre"=>"Ensalada de frutas","valor"=>10),

   array("id"=>2,"nombre"=>"Hamburguesa","valor"=>4.90),

   array("id"=>3,"nombre"=>"Bocadillo","valor"=>5),

   array("id"=>4,"nombre"=>"Sandwich","valor"=>3),

   array("id"=>5,"nombre"=>"Papas con calamares","valor"=>10),

   array("id"=>6,"nombre"=>"Callos a la madrileña","valor"=>10),

   array("id"=>7,"nombre"=>"Gaspacho andaluz","valor"=>8),

   array("id"=>8,"nombre"=>"Migas extremañas","valor"=>6)


);


   $cantidades = array();

   foreach($productos as $producto){

      

       if(isset($_POST['cantidad_'.$producto['id']])){

           //array_push($cantidades,$_POST['cantidad_'.$producto['id']]);

           $cantidad = $_POST['cantidad_'.$producto['id']];

          

           $datos = array();

           $datos['cantidad']=$cantidad;

           $datos['precio_parcial']=(int)$cantidad*(int)$producto['valor'];

           $cantidades[$producto['id']]=$datos;


       }

   }


  

 

function crearTabla($productos,$cantidades){

   echo '<table>';

   foreach($productos as $producto){

       $id=$producto['id'];

     

       $datos = $cantidades[$id];

       $cantidad = $datos['cantidad'];

       echo '<tr>';

           echo '<td>'.$producto['nombre'].'</td>';

           echo '<td><input type="text" name="cantidad_'.$producto['id'].'" value="'.$cantidad.'"></input> </td>';

           echo '<td>'.$producto['valor'].'</td>';

           echo '<td>'.(int)$cantidad*(int)$producto['valor'].'</td>';

       echo '</tr>';

   }

   echo '</table>';


}




   ?>


  <form action="pedidoComida.php" method='POST'>



<?php

 

  crearTabla($productos,$cantidades);


?>


<p><input type="submit" value="Hacer pedido" ></p>

</form>