<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>productos</title>

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
                
            }else if(!isset($_SESSION["usuario"])){
                echo "<a href=InicioDeSesion.php>Iniciar sesion</a>";
            }
          
    ?>
        </nav>
    </div>

    <br>
    <section>
    <h1>En construccion</h1>
    <p>Esta seccion aun se encuentra en construccion</p>
    </section>

</body>
</html>