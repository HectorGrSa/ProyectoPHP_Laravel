<?php

require_once('modelo/sessions_modelo.php');
require('vista/login.view.php');
require('modelo/login_modelo.php');
if(isset($_POST['nombre']) && isset($_POST['contraseña'])){
    $nombre = $_POST['nombre'];
    $contra = $_POST['contraseña'];
    $log = new Login_Model();
    $admin = $log->getAdmin($nombre);
    $_SESSION['esAdmin'] = $admin;
    $nombre = $log->getComprobarLog($nombre, $contra);
}



