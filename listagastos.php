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
    DB::deletedatos('gastos', 'cod_gasto', $_POST['oculto']);
}
//meterle una comprobacion


$indicee =array();
$indicee= DB::getindice('gastos');
$indicee[]="Borrar";
$contenidoo =array();
$contenidoo= DB::getlista('gastos', $indicee);
$script= array();

// Ponemos a disposición de la plantilla los datos necesarios
$smarty->assign('usuario', $_SESSION['usuario']);
$smarty->assign('tipolistap', 'gastos');
$smarty->assign('tipolistas', 'gasto');
$smarty->assign('indicee', $indicee);
$smarty->assign('contenidoo', $contenidoo);
$smarty->assign('script', $script);
$smarty->assign('crearphp', 'creargasto.php');
$smarty->assign('paginaactual', 'listagastos.php');

// Mostramos la plantilla
$smarty->display('listas.tpl');     
?>