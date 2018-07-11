<?php
require_once('../model/Data.php');
session_start();


$idProducto=$_REQUEST["productoAComprar"];

$d=new Data();
/*
$_SESSION['discos'] = $d->getDiscos($nombreDisco);


header("location: ../view/verProducto.php");
*/
?>