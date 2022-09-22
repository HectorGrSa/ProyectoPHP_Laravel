<?php
require('modelo/sessions_modelo.php');
require('modelo/información_Articulos_model.php');
$InfoArt = new información_Articulos_model();
$id = $_GET['id'];
$texto = $InfoArt->getTexto($id);
$foto = $InfoArt->getFoto($id);
$titulo = $InfoArt->getTitulo($id);
if(isset($_GET['id'])&& isset($_GET['comentari']) && isset($_GET['nomClient']) && isset($_GET['puntuacion'])){
    $id_articulo= $_GET['id'];
    $comentari = $_GET['comentari'];
    $nombre_cliente = $_GET['nomClient'];
    $puntuacion = $_GET['puntuacion'];
    $InfoArt->getDatosComentario($id_articulo,$comentari,$nombre_cliente,$puntuacion);
    }
$datosTabla1 = $InfoArt->getDatosTabla($id);

if($datosTabla1 != null) {
    $datosTabla = $datosTabla1;
}

if(isset($_GET['id2']) && isset($_GET['id'])){
    $id2 = $_GET['id2'];
    print_r($id2,$id);
    $InfoArt->getEliminar_Comentario($id2,$id);
}

require('vista/articulos.view.php');



