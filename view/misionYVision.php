<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mision y Vision</title>

    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/js/bootstrap.js">
    <link rel="stylesheet" href="../css/estilos.css">

</head>
<body>

    <div class="topnav">
    <nav>
        <a href="../index.php">Inicio</a> 
        <a href="misionYVision.php">Mision y vision</a> 
        
        <?php
            if(isset($_SESSION["usuario"])){
                echo "<a href=productos.php>Productos</a> ";
                echo "<a href=../controller/cerrarSesion.php>Cerrar sesion</a>";
                
                
            }else if(!isset($_SESSION["usuario"])){
                echo "<a href=InicioDeSesion.php>Iniciar sesion</a>";
            }

    ?>
        </nav>
    </div>

    <br>
    
    <p>Informacion</p>

<aside>
  <h4>Nuestra vision</h4>
  <p>Estamos dedicados a mejorar y crecer junto a nuestros clientes.</p>
</aside>


<aside>
  <h4>Nuestra mision</h4>
  <p>Otorgarle los mejores precios y calidad de producto a nuestra clientela.</p>
</aside>

</body>
</html>