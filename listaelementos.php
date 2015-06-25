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

//Si se ha pulsado borrar
if(isset($_POST['borrar'])){
    DB::deletedatos('elementos', 'cod_elemento', $_POST['oculto']);
}
//meterle comprobacion y que no este repetido el codigo y asegurar que no hay borrado estando el elemento en referencia

$indicee =array();
$indicee= DB::getindice('elementos');
$contenidoo =array();
$contenidoo= DB::getlista('elementos', $indicee);
$script= array();

// Ponemos a disposición de la plantilla los datos necesarios
$smarty->assign('usuario', $_SESSION['usuario']);
$smarty->assign('tipolistap', 'elementos');
$smarty->assign('tipolistas', 'elemento');
$smarty->assign('indicee', $indicee);
$smarty->assign('contenidoo', $contenidoo);
$smarty->assign('script', $script);
$smarty->assign('crearphp', 'crearelemento.php');
$smarty->assign('paginaactual', 'listaelementos.php');


// Mostramos la plantilla
$smarty->display('listas.tpl');     
?>