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

if (isset($_POST['crear'])) {
    if (isset($_POST['cod']) && isset($_POST['nombre']) && $_POST['precio'] != 0 && isset($_POST['precio']) && isset($_POST['coste'])) {
        $columnas = array('cod_elemento', 'nombre', 'precio', 'coste');
        $datos = array($_POST['cod'], $_POST['nombre'], $_POST['precio'], $_POST['coste']);
        DB::adddato('elementos', $columnas, $datos);
    }
}

// Ponemos a disposición de la plantilla los datos necesarios
$smarty->assign('usuario', $_SESSION['usuario']);
$smarty->assign('phpself', $_SERVER['PHP_SELF']);
$smarty->assign('file', "crearelemento.tpl");
$smarty->assign('tipoelementos', "elementos");
$smarty->assign('tipoelemento', "elemento");
$smarty->assign('listaphp', "listaelementos.php");
$smarty->assign('script', $script);

// Mostramos la plantilla
$smarty->display('crear.tpl');
?>