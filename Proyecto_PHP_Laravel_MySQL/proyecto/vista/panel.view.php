<?php
require("header_view.php");
?>
<html>
<head>
    <meta charset=“UTF-8”>
    <meta name=“viewport” content=“width=device-width”>
    <link href="css/login_registro.css" rel="stylesheet" type="text/css">
</head>
<body>
<form class = "login2" method="post" action="index5.php" enctype="multipart/form-data">
    <div id ="principal">
        <p>PANEL DE ADMIN</p>
        Titulo:<br>
        <input type="text" name="titulo"><br>
        <label for="foto">Selecciona una foto:</label><br>
        <input type="file" id="foto" name="foto"><br>
        Texto:<br>
        <input type="text" name="texto"><br>
        <input type="submit" name="enviar" value="añadir">
        <?php
        ?>
    </div>
    <div id="principal2">
        <?php foreach($datosTabla as $articulo):  ?>
            <div id="principal3">
                <?php echo $articulo["titulo"];?><a href="index5.php?id=<?php echo $articulo["id"]?>"> Eliminar</a> <a href="index4.php?id=<?php echo $articulo["id"]?>"> Ver</a><br>
            </div>
        <?php endforeach; ?>
        <br>
    </div>

</form>
</body>
</html>
