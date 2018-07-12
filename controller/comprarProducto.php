<?php
require_once('../model/Data.php');
require_once('../model/Usuario.php');
session_start();


$idProducto=$_REQUEST["idProductoAComprar"];

$d=new Data();

$u=$_SESSION["usuario"];
$idUsuario=$u->getId();

$d->comprarProducto($idUsuario, $idProducto);

$validez=$d->determinarSiProductoExisteOTieneStock($idProducto);

echo $idProducto;
echo $validez;

$_SESSION["msgValidez"]="Ese producto no esta disponible";


if($validez==0){
    $_SESSION["msgValidez"]="Ese producto no esta disponible";
}else if($validez==1){
    $_SESSION["msgValidez"]="Listo";
}


  header("location: ../view/productosAdquiridos.php");

?>