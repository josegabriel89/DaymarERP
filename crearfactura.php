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


//calcular codigo
$hora=  getdate();
if( strlen($hora['hours'])==1)$hora['hours']='0'.$hora['hours'];
if( strlen($hora['minutes'])==1)$hora['minutes']='0'.$hora['minutes'];
if( strlen($hora['seconds'])==1)$hora['seconds']='0'.$hora['seconds'];
if( strlen($hora['yday'])==1)$hora['yday']='00'.$hora['yday'];
if( strlen($hora['yday'])==2)$hora['yday']='0'.$hora['yday'];
$codigo= strtoupper("F".dechex($hora['year']).dechex($hora['yday']).dechex($hora['hours']).dechex($hora['minutes']).dechex($hora['seconds']));

// Ponemos a disposición de la plantilla los datos necesarios
$smarty->assign('usuario', $_SESSION['usuario']);
$smarty->assign('phpself', $_SERVER['PHP_SELF']);
$smarty->assign('file', "crearcliente.tpl");
$smarty->assign('tipoelementos', "clientes");
$smarty->assign('tipoelemento', "cliente");
$smarty->assign('listaphp', "listaclientes.php");
$smarty->assign('num', $_SESSION['numerotelefonos']);
$smarty->assign('script', $script);

// Mostramos la plantilla
$smarty->display('crear.tpl');
?>