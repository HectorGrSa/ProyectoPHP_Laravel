<?php
require("header_view.php");
?>
    <link href="css/contenido_css.css" rel="stylesheet" type="text/css">
    <section id="primeraSeccion">
        <span>
            <header>
                <h1>WEB DINAMICA</h1>
                <h2> Creada por Raul y Hector</h2>
            </header>
        </span>
        <article>
            <div class="content">
                <p>¡Bienvenido <?php echo $nombre ?>!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
            </div>
        </article>
    </section>
    <div class="contenedor">
        <h1>Articulos</h1>
        <section class="articulos">
            <ul>
                <?php foreach($articulos as $articulo): ?>
                    <div id = iphons>
                        <?php echo "<img src='photos/$articulo[img]'>"?>
                        <a href="index4.php?id=<?php echo $articulo["id"]?>"><?php echo $articulo["titulo"];?></a>
                    </div>
                <?php endforeach; ?>
            </ul>
        </section>
        <section class="paginacion">
            <ul>
                <?php if($pagina == 1): ?>
                    <li class="disabled">&laquo;</li>
                <?php else: ?>
                    <li><a href="?pagina=<?php echo $pagina-1?>">&laquo;</a></li>
                <?php endif; ?>

                <?php
                for ($i=1; $i <= $numeroPaginas; $i++) {
                    if($pagina==$i){
                        echo "<li class='active'><a href='?pagina=$i'>$i</a></li>";
                    } else {
                        echo "<li><a href='?pagina=$i'>$i</a></li>";
                    }
                }
                ?>

                <?php if($pagina == $numeroPaginas): ?>
                    <li class="disabled">&raquo;</li>
                <?php else: ?>
                    <li><a href="?pagina=<?php echo $pagina+1?>">&raquo;</a></li>
                <?php endif; ?>

            </ul>
        </section>
    </div>





<?php
