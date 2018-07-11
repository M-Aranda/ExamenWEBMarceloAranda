<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buscar Discos</title>


    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/js/bootstrap.js">
    <link rel="stylesheet" href="../css/estilos.css">

    <script>
        function validarFormularioNombre() {
            var x = document.forms["formularioBusquedaPorNombre"]["nombreDisco"].value;
            if (x == "") {
                alert("Debe colocar un nombre de disco");
                return false;
            }
        }


        function validarFormularioBanda() {
            var x = document.forms["formularioBusquedaPorBanda"]["nombreBanda"].value;
            if (x == "") {
                alert("Debe colocar un nombre de banda");
                return false;
            }
        }

        function validarFormularioGenero() {
            var x = document.forms["formularioBusquedaPorGenero"]["nombreGenero"].value;
            if (x == "") {
                alert("Debe colocar un nombre de genero");
                return false;
            }
        }



    </script>

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

     <form name="formularioBusquedaPorNombre" action=../controller/buscarDiscoPorNombre.php onsubmit="return validarFormularioNombre()" method=post>
        <input type=text name="nombreDisco" id="nombreDisco" placeholder="nombre de disco:">
        <input type=submit value="Buscar por nombre">
     </form>


    <form name="formularioBusquedaPorBanda" action=../controller/buscarDiscoPorBanda.php onsubmit="return validarFormularioBanda()" method=post>
        <input type=text name="nombreBanda" id="nombreBanda" placeholder="nombre de banda:">
        <input type=submit value="Buscar por banda">
     </form>

    <form name="formularioBusquedaPorGenero" action=../controller/buscarDiscoPorGenero.php onsubmit="return validarFormularioGenero()" method=post>
        <input type=text name="nombreGenero" id="nombreGenero" placeholder="nombre de genero:">
        <input type=submit value="Buscar por genero">
     </form>


    
</body>
</html>