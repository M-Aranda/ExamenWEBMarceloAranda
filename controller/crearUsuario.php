<?php


require_once('../model/Data.php');

$nombre=$_REQUEST["nombreRegistro"];
$rut=$_REQUEST["rutRegistro"];
$pass=$_REQUEST["passRegistro"];

$d=new Data();


session_start();

if(!$d->existeRut($rut)){
    $d->crearUsuario($nombre, $rut, $pass);

    $_SESSION["mensaje"]="Usuario creado";

    header("location: ../view/InicioDeSesion.php");
    
}else{

    $_SESSION["mensaje"]="Rut $rut ya esta en la base de datos";

    header("location: ../view/InicioDeSesion.php");

}





