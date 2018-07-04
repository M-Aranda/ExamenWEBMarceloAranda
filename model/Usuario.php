<?php 
class Usuario{
    private $id;
    private $nombre;
    private $rut;
    private $pass;

    public function __construct($id, $nombre, $rut, $pass){
        $this->id       = $id;
        $this->nombre   = $nombre;
        $this->rut      = $rut;
        $this->pass     = $pass;
    }

    public function getId(){
        return $this->id;
    }

    public function getRut(){
        return $this->rut;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getPass(){
        return $this->pass;
    }

    public function setId($id){
        return $this->id;
    }

    public function setRut($rut){
        return $this->rut;
    }

    public function setNombre($nombre){
        return $this->nombre;
    }

    public function setPass($pass){
        return $this->pass;
    }

}
