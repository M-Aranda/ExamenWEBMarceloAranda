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
        <a href="InicioDeSesion.php">Inicio de sesion</a>
        </nav>
    </div>
    <br> 
    <h4>Formulario de registro</h4>
    <form action="../controller/crearUsuario.php" method="post">
    <input type="text" name="nombreRegistro" id="nombreRegistro" placeholder="nombre:">
    <input type="text" name="rutRegistro" id="rutRegistro" placeholder="rut:">
    <input type="text" name="passRegistro" id="passRegistro" placeholder="password:">
    <input type="submit" value="Registrar">
    </form>
    <br>
    <br>
    <?php

    if(isset($_SESSION["mensaje"])){
        $men=$_SESSION["mensaje"];
        echo $men;

        //session_destroy();
        unset($_SESSION["mensaje"]);
    }


?>
    <br>   
    <h4>Inicio de sesion</h4>     
    <form action="../controller/iniciarSesion.php" method="post">
    <input type="text" name="rutInicio" id="rutInicio" placeholder="rut:">
    <input type="text" name="passInicio" id="passInicio" placeholder="password:">
    <input type="submit" value="Ingresar">
    </form>


</body>
</html>