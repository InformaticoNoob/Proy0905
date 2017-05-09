<?php
include ('lib/Producto.php');



$oProducto1 = new Producto();
$oProducto1->nombre="Nuevo Producto";
$oProducto1->codigo="001";

$oProducto2 = new Producto("Nuevo Producto 002",0,"002");
$oProducto3 = new Producto("Nuevo Producto 003",0,"003");


/*

$oProducto2->nombre="Nuevo Producto 002";
$oProducto2->codigo="002";
$oProducto3->nombre="Nuevo Producto 003";
$oProducto3->codigo="003";
*/

$aProductos[0]=$oProducto1;
$aProductos[1]=$oProducto2;
$aProductos[2]=$oProducto3;


?>
<!DOCTYPE html>

<html> 
    <head>
        
        
    </head>

    <body>
        
        
        
        <?php
        
        
        foreach ($aProductos as $oPro){
        echo $oPro->codigo. "  " .$oPro->nombre;
        echo "<br>";
        }
        
        
        ?>
        
        
        
    </body>
    
</html>

