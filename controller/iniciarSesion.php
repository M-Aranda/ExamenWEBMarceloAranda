<?php
session_start();
require_once("../model/Data.php");

$rut = $_REQUEST["rutInicio"];
$pass = $_REQUEST["passInicio"];

$d = new Data();

$usuario = $d->getUsuario($rut, $pass);

if($usuario == null){
    
    header("location: ../view/error.php");
}else{
    $_SESSION["usuario"]="iniciado";
    
    header("location: ../index.php");
}