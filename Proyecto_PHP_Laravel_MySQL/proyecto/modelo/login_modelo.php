<?php
require_once("config/config.php");


class Login_Model{
    private $conexion;
    private $admin;
    private $nombre;
    private $contraseña;


    public function __construct(){
        global $bd_config;
        $this->conexion = Conectar::conexion($bd_config);
        $this->admin;

    }

    public function getAdmin($nombre){

        $this->admin = $this->conexion->query("SELECT admin FROM clientes WHERE Nombre = '$nombre'");
        $this->admin = $this->admin->fetch();

        return $this->admin;
    }

    public function getComprobarLog($nombre, $contra){
        $conexion = mysqli_connect("localhost:3307", "daw", "daw", "proyecto");
        $consulta = mysqli_query($conexion, "SELECT * FROM clientes WHERE Nombre = '$nombre ' and password = '$contra'");

        if (mysqli_num_rows($consulta) == 0) {
            echo "El usuario no existe";
        } else {
            $_SESSION['nombre']=$nombre;
            $_SESSION['contraseña']=$contra;
            header("location: index.php");
        }

        return $this->nombre;
    }



}

?>
