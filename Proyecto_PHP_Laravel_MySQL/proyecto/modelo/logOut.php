<?php
session_start();
if($_SESSION) {
    $_SESSION['nombre']="Usuario";
    $_SESSION['contraseña']="123";
    $_SESSION['esAdmin']=0;
    header("location:../index.php");

}