<?php
session_start();

if($_SESSION) {
    $nombre = $_SESSION['nombre'];

    $conexion = new PDO('mysql:host=localhost:3307;dbname=proyecto',  'daw', 'daw');
    $admin = $conexion->query("SELECT admin FROM clientes WHERE Nombre = '$nombre'");
    $admin = $admin->fetch();
    $_SESSION['esAdmin'] = $admin;

}else{
    $_SESSION['nombre']="Usuario";
    $_SESSION['contraseña']="123";
    $_SESSION['esAdmin']=0;

    header("Location: index.php");
}
