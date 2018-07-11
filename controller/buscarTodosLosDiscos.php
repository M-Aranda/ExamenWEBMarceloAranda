<?php
require_once('../model/Data.php');
session_start();



$d=new Data();

$_SESSION['discos'] = $d->getTodosLosDiscos();


header("location: ../view/verProducto.php");

?>