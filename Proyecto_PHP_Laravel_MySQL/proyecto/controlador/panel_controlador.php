<?php
require('modelo/sessions_modelo.php');
require('modelo/panel_modelo.php');
$pan = new panel_modelo();
if($_SESSION){
    $admin =$_SESSION['esAdmin'];
    if($admin[0] == 0){
        header("location:index.php");
    }
}

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $eliminar =  $pan->getEliminarArtic($id);
}
if(isset($_POST['titulo'])&& isset($_POST['texto'])&& isset($_FILES['foto'])){
    $titulo = $_POST['titulo'];
    $texto =$_POST['texto'];
    $pan->getAñadirArticulo($titulo,$texto);
}
$datosTabla = $pan->getDatosTabla();
require('vista/panel.view.php');

