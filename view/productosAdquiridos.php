<?php
require_once("../model/Data.php");
require_once("../model/Usuario.php");
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos adquiridos</title>
    
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/js/bootstrap.js">
    <link rel="stylesheet" href="../css/estilos.css">


</head>
<body>



<div class="topnav">
    <nav>
        <a href="../index.php">Inicio</a> 
        <a href="misionYVision.php">Mision y vision</a> 
        <a href="productos.php">Productos</a> 
        <?php
            if(isset($_SESSION["usuario"])){
                echo "<a href=../controller/cerrarSesion.php>Cerrar sesion</a>";
                
            }
          
    ?>
        </nav>
    </div>

            <?php      
            if(isset($_SESSION["usuario"])){
                $u=$_SESSION["usuario"];
                echo "<h3>Aqui puede ver los productos que ha adquirido, ".$u->getNombre()."</h3>";            
            }

            ?>



    <?php
    $d= new Data();
    $u=$_SESSION["usuario"];
    $listadoDeNombresDeProductos=$d->verProductosAdquiridos($u->getId());

    foreach ($listadoDeNombresDeProductos as $k) {
        echo "<h4>".$k."</h4>";
    }

    
    
    
    
    ?>


    
</body>
</html>