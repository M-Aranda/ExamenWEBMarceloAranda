<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio de sesion</title>

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
    </div>
    </nav>

    <?php

        if(isset($_SESSION["mensaje"])){
            $men=$_SESSION["mensaje"];
            echo $men;
            unset($_SESSION["mensaje"]);
        }

    ?>
        <?php

            if(isset($_SESSION["usuario"])){
                echo "<h4>Debe cerrar sesion para poder registrar/ingresar otro usuario";

            }else if(!isset($_SESSION["usuario"])){
                echo "
                <br> 
                <h4>Formulario de registro</h4>
                <form action=../controller/crearUsuario.php method=post>
                <input type=text name=nombreRegistro id=nombreRegistro placeholder=nombre:>
                <input type=text name=rutRegistro id=rutRegistro placeholder=rut:>
                <input type=text name=passRegistro id=passRegistro placeholder=password:>
                <input type=submit value=Registrar>
                </form>
                <br>
                <br>         
                <br>   
                <h4>Inicio de sesion</h4>     
                <form action=../controller/iniciarSesion.php method=post>
                <input type=text name=rutInicio id=rutInicio placeholder=rut:>
                <input type=text name=passInicio id=passInicio placeholder=password:>
                <input type=submit value=Ingresar>
                </form>";

            }

        ?>

</body>
</html>