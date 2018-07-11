<?php
require_once('../model/Data.php');
session_start();


$nombreBanda=$_REQUEST["nombreBanda"];

$d=new Data();

$_SESSION['discos'] = $d->getDiscosPorBanda($nombreBanda);


header("location: ../view/verProducto.php");

?>