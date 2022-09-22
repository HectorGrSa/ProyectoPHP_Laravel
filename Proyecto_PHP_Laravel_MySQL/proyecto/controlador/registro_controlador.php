<?php
require_once('modelo/sessions_modelo.php');
require('vista/registro.view.php');
require('modelo/registro_modelo.php');
if(isset($_POST['nombre'])&& isset($_POST['apellido']) && isset($_POST['mail']) && isset($_POST['clave'])){
    $nombre = $_POST['nombre'];
    $apellido=$_POST['apellido'];
    $mail =$_POST['mail'];
    $contra = $_POST['clave'];
    $reg = new registro_modelo();
    $nombre = $reg->getRegistro($nombre,$apellido,$mail, $contra);
}
