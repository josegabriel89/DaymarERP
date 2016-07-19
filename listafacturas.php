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

// Y comprobamos que el usuario se haya autentificado
if (!isset($_SESSION['usuario']))
    die("Error - debe <a href='login.php'>identificarse</a>.<br />");

$indicee = array();
$indicee = DB::getindice('facturas');
$contenidoo = array();
$contenidoo = DB::gettabla('facturas');
$script = array();

if (count($contenidoo) > 0) {
    $indicee[] = "Imprimir";
}

//Si se ha pulsado imprimir
if (isset($_POST['imprimir'])) {
    $script[]='alert("Funcionalidad aun no viable, prevista para una v2.0.\nEjecute directamente el proyecto.\nDisculpe las molestias");';
}

// Ponemos a disposición de la plantilla los datos necesarios
$smarty->assign('usuario', $_SESSION['usuario']);
$smarty->assign('tipolistap', 'facturas');
$smarty->assign('tipolistas', 'factura');
$smarty->assign('indicee', $indicee);
$smarty->assign('contenidoo', $contenidoo);
$smarty->assign('crearphp', 'crearfactura.php');
$smarty->assign('script', $script);
$smarty->assign('title', 'Lista facturas');
$smarty->assign('titlemenu', 'Lista de facturas');
$smarty->assign('pagina', 'listas.tpl');
$smarty->assign('paginaactual', $_SERVER['PHP_SELF']);

// Mostramos la plantilla
$smarty->display('cuerpo.tpl');
?>