<?php
require_once("config/config.php");
class registro_modelo{
    private $conexion;

    public function __construct()
    {
        global $bd_config;
        $this->conexion = Conectar::conexion($bd_config);
    }
    public function getRegistro($nombre,$apellido,$mail,$contra)
    {
        try {

            $insert = "insert into clientes (Nombre,Apellidos,Correo,password,admin) values(?,?,?,?,false)";
            $this->conexion->prepare($insert)->execute([$nombre,$apellido,$mail, $contra]);
            header("location:index2.php");
        } catch (Exception $e) {
            $this->conexion = "error de conexion";
            echo "error " . $e->getMessage();
        }

    }
}


