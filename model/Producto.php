<?php

class Producto{
    private $id;
    private $nombre;
    private $banda;
    private $genero;
    private $anio;
    private $stock;

    public function __construct($id, $nombre, $banda, $genero, $anio, $stock){
        $this->id       = $id;
        $this->nombre   = $nombre;
        $this->banda      = $banda;
        $this->genero     = $genero;
        $this->anio     = $anio;
        $this->stock     = $stock;
    }

    public function getId(){
        return $this->id;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getBanda(){
        return $this->banda;
    }

    
    public function getGenero(){
        return $this->genero;
    }

    
    public function getAnio(){
        return $this->anio;
    }

    public function getStock(){
        return $this->stock;
    }



    public function setId($id){
        $this->id = $id;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setBanda($banda){
        $this->banda = $banda;
    }

    public function setGenero($genero){
        $this->genero = $genero;
    }

    public function setAnio($anio){
        $this->anio = $anio;
    }

    public function setStock($stock){
        $this->stock = $stock;
    }

}




?>