<?php
require_once('include/DB.php');
require_once('Smarty.class.php');

// Cargamos la librería de Smarty
require_once('Smarty.class.php');
$smarty = new Smarty();
$smarty->setTemplateDir('./smarty/templates/');
$smarty->setCompileDir('./smarty/templates_c/');
$smarty->setConfigDir('./smarty/configs/');
$smarty->setCacheDir('./smarty/cache/');

// Recuperamos la información de la sesión
session_start();

$script = array();

// Y comprobamos que el usuario se haya autentificado
if (!isset($_SESSION['usuario'])) 
    die("Error - debe <a href='login.php'>identificarse</a>.<br />");

// Ponemos a disposición de la plantilla los datos necesarios
$smarty->assign('usuario', $_SESSION['usuario']);
$smarty->assign('script', $script);
$smarty->assign('title', 'Lista ');
$smarty->assign('titlemenu', 'Lista de ');
$smarty->assign('pagina', 'listas.tpl');

// Mostramos la plantilla
$smarty->display('cuerpo.tpl');     
?>