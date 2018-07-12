<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comprar Discos</title>


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
            if(!isset($_SESSION["usuario"])){
                echo "<a href=../controller/cerrarSesion.php>Cerrar sesion</a>";
                
            }else if(isset($_SESSION["usuario"])){
                echo "<a href=InicioDeSesion.php>Iniciar sesion</a>";
            }
          
    ?>
        </nav>
    </div>

            <?php      
            if(isset($_SESSION["usuario"])){
                $u=$_SESSION["usuario"];
                echo "<h3>Bienvenido a su pagina de compra de productos, ".$u->getNombre()."</h3>";            
            }

            ?>


            <h5>Ingrese el id del disco que desea adquirir<h5>

            <form name="formularioDeCompra" action="../controller/comprarProducto.php" method="post">
            <input type="number" name="idProductoAComprar" id="idProductoAComprar" placeholder="id de producto">
            <input type="submit" value="Comprar">
            </form>



    
</body>
</html>