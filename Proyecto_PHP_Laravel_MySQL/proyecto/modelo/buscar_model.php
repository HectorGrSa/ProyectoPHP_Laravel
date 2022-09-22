<?php
require_once("config/config.php");
class buscar_model{
    private $conexion;

    public function __construct(){
        global $bd_config;
        $this->conexion = Conectar::conexion($bd_config);
    }

    public function getArticulos($palabraBusqueda){
        $resultadoBusqueda = $this->conexion->query("SELECT * FROM articulos WHERE titulo LIKE '%$palabraBusqueda%'");
        return $resultadoBusqueda;

    }






}

