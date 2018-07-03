<?php
require_once("Conexion.php");
require_once("Usuario.php");

class Data{
    private $con;

    public function __construct(){
        $this->con = new Conexion();
    }

    public function usarConexion($query){

        $this->con->conectar();
        $this->con->ejecutar($query);
        $this->con->desconectar();
    }


    public function crearUsuario($nombre, $rut, $pass){
        $query="INSERT INTO usuario VALUES (NULL,'$rut','$nombre','$pass') ;";
        $this->usarConexion($query);
    }

    public function getUsuarios(){
        $query="SELECT id, nombre, rut FROM USUARIO";

        $this->con->conectar();
        $lista=array();

        $this->con->desconectar();

        return $lista;
 }

 public function existeRut ($rut){
        $query="SELECT COUNT(*) FROM usuario WHERE rut ='$rut' ";
        $this->con->conectar();
        $rs=$this->con->ejecutar($query);

        $existe=false;

        if($reg->mysql_fetch_array){
            if($reg[0]=1){
                $existe=true;
            }
        }

        $this->con->desconectar();
        return $existe;
}

    public function getUsuario($rut, $pass){
        $query = "SELECT id, nombre, rut FROM usuario WHERE rut = '$rut' AND clave = '$pass'";
        
        $this->con->conectar();
        $rs = $this->con->ejecutar($query);

        $usuario = null;

        if($reg = $rs->fetch_array()){
            $usuario = new Usuario($reg[0], $reg[1], $reg[2], $pass);
        }

        $this->con->desconectar();
    
        return $usuario;
    }
}



