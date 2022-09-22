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
<form class = "login" method="post" action="index2.php" name="login">
    <div id ="principal">
        <h2 >Login</h2>
        <input type="text" placeholder="Escribe tu nombre..." name="nombre">
        </br>
        <input type="password" placeholder="Escribe tu contraseña..." name="contraseña">
        </br>
        <input type="submit" value="Enviar">
        <a href="index3.php">registrarse</a>
    </div>
</form>
</body>
</html>

