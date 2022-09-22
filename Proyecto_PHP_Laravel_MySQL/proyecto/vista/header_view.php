<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href=" css/header_css.css" rel="stylesheet" type="text/css">
</head>
<body>
    <header id="encabezado">
        <a id="logo-header" href="index.php">
            <span class="site-name">BCN WEB</span>
            <span class="site-desc">Raul / Hector</span>
        </a>
        <nav>
            <ul class="menu" >
                <li class="dropdown">
                    <a href="#"><?php echo $nombre ?> |</a>
                    <?php if($nombre != "Usuario"):?>
                        <div class="dropdown-content">
                            <a href="modelo/logOut.php">Log out</a>
                        </div>
                    <?php endif;?>
                </li>

                <?php if($admin["admin"] == 1):?>
                    <li class="panel"><a class="panel" href="index5.php">PANEL</a></li>
                <?php endif;?>
                <li><a href="index6.php">Buscar</a></li>
                <?php if($nombre == "Usuario"):?>
                    <li class="login"><a class="login" href="index2.php">Login</a></li>
                <?php endif;?>
            </ul>
        </nav>
    </header>
</body>
</html>
