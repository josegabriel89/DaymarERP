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

//Se declara la variable para generar scripts
$script = array();


// Y comprobamos que el usuario se haya autentificado
if (!isset($_SESSION['usuario']))
    die("Error - debe <a href='login.php'>identificarse</a>.<br />");

if (isset($_POST['crear'])) {
    if (isset($_POST['cod']) && isset($_POST['nombre']) && $_POST['precio'] != 0 && isset($_POST['precio']) && isset($_POST['coste']) && $_POST['cod']!="") {
        $columnas = array('cod_elemento', 'nombre', 'precio', 'coste');
        $datos = array($_POST['cod'], $_POST['nombre'], $_POST['precio'], $_POST['coste']);
        DB::adddato('elementos', $columnas, $datos);
    } else {
        $scriptvalor = 'alert("Los siguientes campos son obligatorios:';
        if (!(isset($_POST['cod']))|| $_POST['cod']=="") {
            $scriptvalor.='\nCodigo';
        }
        if (!(isset($_POST['nombre']))) {
            $scriptvalor.='\nNombre del gasto';
        }
        if ($_POST['precio'] == 0 || !(isset($_POST['precio']))) {
            $scriptvalor.='\nPrecio';
        }
        $scriptvalor.='")';
        $script[] = $scriptvalor;
    }
}

// Ponemos a disposición de la plantilla los datos necesarios
$smarty->assign('usuario', $_SESSION['usuario']);
$smarty->assign('phpself', $_SERVER['PHP_SELF']);
$smarty->assign('tipoelementos', "elementos");
$smarty->assign('tipoelemento', "elemento");
$smarty->assign('listaphp', "listaelementos.php");
$smarty->assign('script', $script);
$smarty->assign('title', 'Crear elementos');
$smarty->assign('titlemenu', 'Crear elementos');
$smarty->assign('file', "crearelemento.tpl");
$smarty->assign('pagina', 'crear.tpl');

// Mostramos la plantilla
$smarty->display('cuerpo.tpl');
?>