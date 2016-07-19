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
//poner una comprobacion


$indicee =array();
$indicee= DB::getindice('gastos');
$contenidoo =array();
$contenidoo= DB::gettabla('gastos');
$script= array();

if (count($contenidoo) > 0) {
$indicee[]="Borrar";
}
// Ponemos a disposición de la plantilla los datos necesarios
$smarty->assign('usuario', $_SESSION['usuario']);
$smarty->assign('tipolistap', 'gastos');
$smarty->assign('tipolistas', 'gasto');
$smarty->assign('indicee', $indicee);
$smarty->assign('contenidoo', $contenidoo);
$smarty->assign('crearphp', 'creargasto.php');
$smarty->assign('script', $script);
$smarty->assign('paginaactual', 'listagastos.php');
$smarty->assign('title', 'Lista gastos');
$smarty->assign('titlemenu', 'Lista de gastos');
$smarty->assign('pagina', 'listas.tpl');

// Mostramos la plantilla
$smarty->display('cuerpo.tpl');     
?>