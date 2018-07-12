<?php 
require_once("model/Usuario.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Indice</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="js/bootstrap.js">
    <link rel="stylesheet" href="css/estilos.css">

</head>

<body>

    <div class="topnav">
    <nav>
        <a href="#">Inicio</a> 
        <a href="view/misionYVision.php">Mision y vision</a> 
        <?php
            if(isset($_SESSION["usuario"])){
                echo "<a href=view/productos.php>Productos</a> ";
                echo "<a href=controller/cerrarSesion.php>Cerrar sesion</a>";
                
            }else if(!isset($_SESSION["usuario"])){
                echo "<a href=view/InicioDeSesion.php>Iniciar sesion</a>";
            }

    ?>
        </nav>
    </div>

        <?php      
            if(isset($_SESSION["usuario"])){
                $u=$_SESSION["usuario"];
                echo "<h3>Hola, ".$u->getNombre()."</h3>";            
            }else if(!isset($_SESSION["usuario"])){
                echo "<h3>Bienvenido</h3>";
            }

    ?>



    <article>
    <header>
        <h1>Bienvenido a Feria de la musica!</h1>
        <h3>Usted se encuentra en la pagina de inicio</h3>
    </header>
    </article>



    <footer>
        <p>Sitio construido por: Marcelo Aranda</p>
        <p>Informacion de contacto: <a href="mailto:cheloz_20@hotmail.com">
        cheloz_20@hotmail.com</a></p>
    </footer>


</body>
</html>