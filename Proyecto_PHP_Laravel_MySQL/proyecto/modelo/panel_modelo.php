<?php
require_once("config/config.php");
class panel_modelo{
    private $conexion;
    public function __construct(){
        global $bd_config;
        $this->conexion = Conectar::conexion($bd_config);
    }

    public function getEliminarArtic($id){
        $this->conexion->query("DELETE FROM articulos WHERE id = $id");
        header("location:index5.php");
    }
//Falta hacer lo de la foto.
    public function getDatosTabla(){
        $datosTabla = $this->conexion->query("SELECT * FROM articulos");
        return $datosTabla;
    }
    public function getAñadirArticulo($titulo,$texto){
        $carpeta_destino = 'photos/';
        $archivo_subir = $carpeta_destino. $_FILES["foto"]["name"];
        move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subir);
        print_r($archivo_subir);
        try {
            $insert = "insert into articulos (titulo,img,texto) values(?,?,?)";
            $this->conexion->prepare($insert)->execute([$titulo, $_FILES["foto"]["name"],$texto]);
            header("location:index5.php");
        } catch (Exception $e) {
            $this->conexion = "error de conexion";
            echo "error " . $e->getMessage();
        }
    }
}
