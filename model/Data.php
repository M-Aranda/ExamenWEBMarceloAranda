<?php
require_once("Conexion.php");
require_once("Usuario.php");
require_once("Producto.php");

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



    public function existeRut($rut){
        $query="SELECT COUNT(*) FROM usuario WHERE rut = '$rut'";

        $this->con->conectar();

        $rs = $this->con->ejecutar($query);
        $existe = false;

        if($reg = $rs->fetch_array()){
            if($reg[0] == 1){
                $existe = true;
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

    public function getDiscosPorNombre($nombreDisco){
        $query = "SELECT * FROM verProductosConInfo WHERE Disco = '$nombreDisco' ";
        // deberia usar like... pero tenia unos dramas con el uso de like en php
        $this->con->conectar();
        $rs = $this->con->ejecutar($query);

        $discos = array();

        while($reg = $rs->fetch_array()){
            
            $disco = new Producto($reg[0], $reg[1], $reg[2], $reg[3], $reg[4], $reg[5]);
            $discos[]=$disco;
        }

        $this->con->desconectar();
    
        return $discos;
    }


    public function getDiscosPorBanda($nombreBanda){
        $query = "SELECT * FROM verProductosConInfo WHERE Banda = '$nombreBanda' ";
        $this->con->conectar();
        $rs = $this->con->ejecutar($query);

        $discos = array();

        while($reg = $rs->fetch_array()){
            
            $disco = new Producto($reg[0], $reg[1], $reg[2], $reg[3], $reg[4], $reg[5]);
            $discos[]=$disco;
        }

        $this->con->desconectar();
    
        return $discos;
    }

    public function getDiscosPorGenero($nombreGenero){
        $query = "SELECT * FROM verProductosConInfo WHERE Genero = '$nombreGenero' ";
        $this->con->conectar();
        $rs = $this->con->ejecutar($query);

        $discos = array();

        while($reg = $rs->fetch_array()){
            
            $disco = new Producto($reg[0], $reg[1], $reg[2], $reg[3], $reg[4], $reg[5]);
            $discos[]=$disco;
        }

        $this->con->desconectar();
    
        return $discos;
    }



    
    public function getTodosLosDiscos(){
        $query = "SELECT * FROM verProductosConInfo ";
        $this->con->conectar();
        $rs = $this->con->ejecutar($query);

        $discos = array();

        while($reg = $rs->fetch_array()){
            
            $disco = new Producto($reg[0], $reg[1], $reg[2], $reg[3], $reg[4], $reg[5]);
            $discos[]=$disco;
        }

        $this->con->desconectar();
    
        return $discos;
    }

    public function comprarProducto($idUsuario, $idProdcuto){
        $query="CALL efectuarCompraDeUnProducto ($idUsuario, $idProdcuto);";
        $this->usarConexion($query);
    }


    public function verProductosAdquiridos($idUsuario){
        $query="SELECT producto.nombre AS 'Nombre' FROM producto, usuario, productoAdquirido WHERE productoAdquirido.fk_producto=producto.id AND 
        productoAdquirido.fk_usuario=usuario.id AND  usuario.id=$idUsuario;";
        $this->con->conectar();
        $rs = $this->con->ejecutar($query);

        $productos = array();

        while($reg = $rs->fetch_array()){
            $p=$reg[0];
            $productos[]=$p;
        }

        $this->con->desconectar();
    
        return $productos;
    }



}



