<?php 
require_once("../model/Producto.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver producto</title>

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
                echo "<a href=productos.php>Productos</a>"; 
                echo "<a href=../controller/cerrarSesion.php>Cerrar sesion</a>";
                
            }else if(!isset($_SESSION["usuario"])){
                echo "<a href=InicioDeSesion.php>Iniciar sesion</a>";
            }

    ?>
    </div>
    </nav>

    <?php

        if(isset($_SESSION["discos"])){
            $listadoDeDiscos=$_SESSION["discos"];
            
            foreach ($listadoDeDiscos as $k) {


            echo  "<table border=default>

                    <tr>
                    <th>Id</th>
                    <th>Nombre del disco</th>
                    <th>Banda</th>
                    <th>Genero</th>
                    <th>Anio</th>
                    <th>Stock</th>
                    </tr>
                    <td>".$k->getId()."</td>
                    <td>".$k->getNombre()."</td>
                    <td>".$k->getBanda()."</td>
                    <td>".$k->getGenero()."</td>
                    <td>".$k->getAnio()."</td>
                    <td>".$k->getStock()."</td>
                    </tr></tr>
                    </table>
                    <br>";
                    
            }

            unset($_SESSION["discos"]);
        }

        if(empty($listadoDeDiscos)){
            echo "<h3>No hay resultados que coincidan con el criterio de busqueda</h3>";
        }
    ?>
        <?php

          

            

        ?>

</body>
</html>