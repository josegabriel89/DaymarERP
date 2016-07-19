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

if (isset($_POST['borrar'])) {
    $facturas = DB::getdatos('facturas', 'dni_cliente', $_POST['oculto']);
    if (count($facturas) == 0) {
        DB::deletedatos('telefonos', 'dni_cliente', $_POST['oculto']);
        DB::deletedatos('clientes', 'dni', $_POST['oculto']);
    } else {
        $scriptvalor = 'alert("Hay facturas asociadas a este cliente. No se puede borrar")';
        $script[] = $scriptvalor;
    }
}

//Si se ha pulsado borrar
if (isset($_POST['borrar'])) {
    $facturas = DB::getdatos('registros', 'cod_elemento', $_POST['oculto']);
    if (count($facturas) == 0) {
        DB::deletedatos('elementos', 'cod_elemento', $_POST['oculto']);
    } else {
        $scriptvalor = 'alert("Hay facturas que contienen este elemento. No se puede borrar")';
        $script[] = $scriptvalor;
    }
}
//meterle comprobacion y que no este repetido el codigo y asegurar que no hay borrado estando el elemento en referencia
//Añadir el indice de telefonos a la tabla
$indicee = array();
$indicee = DB::getindice('elementos');
$contenidoo = array();
$contenidoo = DB::gettabla('elementos');

if (count($contenidoo) > 0) {
    $indicee[] = "Borrar";
}

// Ponemos a disposición de la plantilla los datos necesarios
$smarty->assign('usuario', $_SESSION['usuario']);
$smarty->assign('tipolistap', 'elementos');
$smarty->assign('tipolistas', 'elemento');
$smarty->assign('indicee', $indicee);
$smarty->assign('contenidoo', $contenidoo);
$smarty->assign('crearphp', 'crearelemento.php');
$smarty->assign('paginaactual', 'listaelementos.php');
$smarty->assign('script', $script);
$smarty->assign('title', 'Lista elementos');
$smarty->assign('titlemenu', 'Lista de elementos');
$smarty->assign('pagina', 'listas.tpl');


// Mostramos la plantilla
$smarty->display('cuerpo.tpl');
?>