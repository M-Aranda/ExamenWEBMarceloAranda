<?php
session_start();


require_once('../model/Data.php');

$nombre=$_REQUEST["nombreRegistro"];
$rut=$_REQUEST["rutRegistro"];
$pass=$_REQUEST["passRegistro"];

$d=new Data();




if(!$d->existeRut($rut)){
    $d->crearUsuario($nombre, $rut, $pass);

    //No existe el usuario, por ende se crea
    $_SESSION["mensaje"]="Usuario creado";

    header("location: ../view/InicioDeSesion.php");
    
}else{
    //Existe el usuario,por ende, no se crea
    $_SESSION["mensaje"]="El rut $rut ya se registro";

    header("location: ../view/InicioDeSesion.php");

}





