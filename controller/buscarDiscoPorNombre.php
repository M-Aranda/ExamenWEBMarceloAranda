<?php
require_once('../model/Data.php');
session_start();


$nombreDisco=$_REQUEST["nombreDisco"];

$d=new Data();

$_SESSION['discos'] = $d->getDiscosPorNombre($nombreDisco);


header("location: ../view/verProducto.php");

?>