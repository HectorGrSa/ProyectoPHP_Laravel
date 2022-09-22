<?php
require("header_view.php");
?>
<html>
<head>
    <title>Login</title>
    <meta charset=“UTF-8”>
    <meta name=“viewport” content=“width=device-width”>
    <link href="css/articulos.css" rel="stylesheet" type="text/css">
</head>
<body>



<section id="primeraSeccion">
    <div>
        <h1><?php echo $titulo["titulo"]?></h1>
        <p><?php echo $texto["texto"]?></p>
    </div>
    <article>
        <div class="content">
            <?php echo "<img width='250' height='170' src='photos/$foto[img]'>"?>
        </div>
    </article>
</section>

<section id="comentaris">
    <div id="div_seccio">
        <form  method="get" action="index4.php">
            <h2>COMENTARIS</h2>

            <?php if($nombre != "Usuario"):?>
                <p>Comentar como:
                    <?php echo $nombre ?></p>
                <label for="puntuacion">Puntua el articulo 1-5:</label><br>
                <input type="number" id="puntuacion" name="puntuacion" min="1" max="5"><br>
                <textarea name="comentari"  placeholder='Comment'></textarea><br>
                <input type="hidden" name="nomClient" value="<?php echo $nombre ?>"/>
                <input type="hidden"  name="id" value="<?php echo $id ?>" />
                <button type="submit" class="boton_envio">Comentar</button>

            <?php elseif ($nombre == "usuario"): ?>
                <p>Necesitas estar registrado para poder escribir un comentario</p>
            <?php endif; ?>

        </form>
        <?php foreach($datosTabla as $comentari):  ?>
            <?php
            $estrellas = "";
            for($i = 0;$i<$comentari["puntuacion"];$i++){
                $estrellas = $estrellas . " * ";
            }
            ?>
            <div id="comentario">
                <?php echo "@".$comentari["nombre_cliente"];?><?php echo $estrellas?><br>
                <?php echo $comentari["comentario"];?><br>
                <?php if($nombre == $comentari["nombre_cliente"]):?>
                    <a href="index4.php?id=<?php echo $id?>&id2=<?php echo $comentari["id"]?>"> Eliminar comentario</a>
                <?php endif;?>

            </div><br>
        <?php endforeach; ?>
        <br>
    </div>
</section>
</body>
</html>
