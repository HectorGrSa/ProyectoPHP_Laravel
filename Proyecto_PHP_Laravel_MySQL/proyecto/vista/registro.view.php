<?php
require("header_view.php");
?>

<html>
<head>
    <title>Login</title>
    <meta charset=“UTF-8”>
    <meta name=“viewport” content=“width=device-width”>
    <link href="css/login_registro.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id ="principal">
    <form class = "login2" method="post" action="index3.php" enctype="multipart/form-data">
        <p>REGISTRAR</p>
        Nombre:<br>
        <input type="text" name="nombre"><br>
        Apellido:<br>
        <input type="text" name="apellido"><br>
        Mail:<br>
        <input type="text" name="mail"><br><br>
        Clave:<br>
        <input type="password" name="clave"><br><br>
        <input type="submit" name="registrar" value="Registrar">
        <a href="index2.php"> <<< Volver al login </a>
    </form>
</div>

</body>
</html>
