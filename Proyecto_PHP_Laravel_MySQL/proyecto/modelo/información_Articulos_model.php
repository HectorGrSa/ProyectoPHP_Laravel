<?php

require_once("config/config.php");

class información_Articulos_model{
    private $conexion;



    public function __construct()
    {
        global $bd_config;
        $this->conexion = Conectar::conexion($bd_config);
        $this->articulos = array();

    }
    public function getTexto($id){
        $texto = $this->conexion->query("SELECT texto FROM articulos WHERE id = $id ");
        $texto = $texto->fetch();
        return $texto;
    }
    public function getFoto($id){
        $foto = $this->conexion->query("SELECT img FROM articulos  WHERE id = $id");
        $foto = $foto->fetch();
        return $foto;
    }
    public function getTitulo($id){
        $titulo = $this->conexion->query("SELECT titulo FROM articulos  WHERE id = $id");
        $titulo = $titulo->fetch();
        return $titulo;
    }

    public function getEliminar_Comentario($id2,$id){
        $this->conexion->query("DELETE FROM comentarios WHERE id = '$id2'");
        header("location:index4.php?id=$id");
    }

    public function getDatosComentario($id_articulo,$comentari,$nombre_cliente,$puntuacion){
        $id_cliente = $this->conexion->query("SELECT id FROM clientes WHERE Nombre = '$nombre_cliente'");
        $id_cliente = $id_cliente->fetch();

        try {

            $insert = "insert into comentarios (nombre_cliente,cliente_id,articulo_id,comentario,puntuacion) values(?,?,?,?,?)";
            $this->conexion->prepare($insert)->execute([$nombre_cliente,$id_cliente["id"],$id_articulo,$comentari,$puntuacion]);

            header("location:index4.php?id=$id_articulo");
        } catch (Exception $e) {
            $this->conexion = "error de conexion";
            echo "error " . $e->getMessage();
        }
    }
    public function getDatosTabla($id){
        $datosTabla = $this->conexion->query("SELECT * FROM comentarios WHERE articulo_id=$id");
        return $datosTabla;
    }







}
