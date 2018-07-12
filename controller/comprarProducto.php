<?php
require_once('../model/Data.php');
require_once('../model/Usuario.php');
session_start();


$idProducto=$_REQUEST["idProductoAComprar"];

$d=new Data();

$u=$_SESSION["usuario"];
$idUsuario=$u->getId();

$d->comprarProducto($idUsuario, $idProducto);

header("location: ../view/productosAdquiridos.php");

?>