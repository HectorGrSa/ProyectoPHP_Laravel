<?php
require('modelo/sessions_modelo.php');
require('modelo/articulos_model.php');

/*articulos*/
$artic = new Articulos_model();
$pagina = (isset($_GET['pagina']))?$_GET['pagina']: 1;
$articulos = $artic->getArticulos($pagina);
$numeroPaginas = $artic->getTotalPages();


require('vista/index.view.php');
