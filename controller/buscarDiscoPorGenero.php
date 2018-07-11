<?php
require_once('../model/Data.php');
session_start();


$nombreGenero=$_REQUEST["nombreGenero"];

$d=new Data();

$_SESSION['discos'] = $d->getDiscosPorGenero($nombreGenero);


header("location: ../view/verProducto.php");

?>