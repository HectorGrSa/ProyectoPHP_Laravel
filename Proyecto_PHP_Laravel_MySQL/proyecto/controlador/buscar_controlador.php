<?php
require('modelo/sessions_modelo.php');
require('vista/buscar.view.php');

if(isset($_POST['palabraBuscar'])){
    $palabraBusqueda = $_POST['palabraBuscar'];
    require ('modelo/buscar_model.php');
    $busc = new buscar_model();
    $resultadoBusqueda = $busc->getArticulos($palabraBusqueda);

    require ('vista/buscar_Resultado.view.php');
}