<?php
?>

<html>
<head>
    <title>Login</title>
    <meta charset=“UTF-8”>
    <meta name=“viewport” content=“width=device-width”>
    <link href="css/login_registro.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="principal2">
    <?php foreach($resultadoBusqueda as $resultado):  ?>
        <div id="principal3">
            <?php echo $resultado["titulo"];?><a href="index4.php?id=<?php echo $resultado["id"]?>"> Ver</a><br>
        </div>
    <?php endforeach; ?>
    <br>
</div>
</body>
</html>
