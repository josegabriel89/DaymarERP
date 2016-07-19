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


//Se declara la variable para generar scripts
$script = array();
//declaracion de variables
$contenidofacturas = array();
$contenidogastos = array();
$haber = "";
$debe = "";
$fechadesdedia = "";
$fechadesdemes = "";
$fechadesdeanno = "";
$fechahastadia = "";
$fechahastames = "";
$fechahastaanno = "";

if (isset($_POST['comprobar'])) {
    $fechadesdedia = $_POST["fechadesdedia"];
    $fechadesdemes = $_POST["fechasdesdemes"];
    $fechadesdeanno = $_POST["fechadesdeanno"];
    $fechahastadia = $_POST["fechahastadia"];
    $fechahastames = $_POST["fechashastames"];
    $fechahastaanno = $_POST["fechahastaanno"];
}


if (isset($_POST['fechaprefijada'])) {
    $fecha = getdate();
    switch ($_POST['fechaprefijada']) {
        case "Este mes":
            $fechadesdedia = '1';
            $fechadesdemes = $fecha['mon'];
            $fechadesdeanno = $fecha['year'];
            $fechahastadia = '30';
            $fechahastames = $fecha['mon'];
            $fechahastaanno = $fecha['year'];
            break;
        case "Mes anterior":
            $fechadesdedia = '1';
            $fechadesdemes = $fecha['mon'] - 1;
            $fechadesdeanno = $fecha['year'];
            $fechahastadia = '30';
            $fechahastames = $fecha['mon'] - 1;
            $fechahastaanno = $fecha['year'];
            break;
        case "Ultimos 3 meses":
            $fechadesdedia = '1';
            $fechadesdemes = $fecha['mon'] - 4;
            $fechadesdeanno = $fecha['year'];
            $fechahastadia = '30';
            $fechahastames = $fecha['mon'] - 1;
            $fechahastaanno = $fecha['year'];
            break;
        case "Este Año":
            $fechadesdedia = '1';
            $fechadesdemes = 1;
            $fechadesdeanno = $fecha['year'];
            $fechahastadia = '31';
            $fechahastames = '12';
            $fechahastaanno = $fecha['year'];
            break;
        case "Año anterior":
            $fechadesdedia = '1';
            $fechadesdemes = '1';
            $fechadesdeanno = $fecha['year'] - 1;
            $fechahastadia = '31';
            $fechahastames = '12';
            $fechahastaanno = $fecha['year'] - 1;
            break;
        case "Ultimos 3 Años":
            $fechadesdedia = '1';
            $fechadesdemes = 1;
            $fechadesdeanno = $fecha['year'] - 4;
            $fechahastadia = '31';
            $fechahastames = '12';
            $fechahastaanno = $fecha['year'] - 1;
            break;
    }
}

if (isset($_POST['comprobar']) || isset($_POST['fechaprefijada'])) {

    $fecha = getdate();
    //factura
    $contenidofacturastabla = array();
    $contenidofacturastabla = DB::getentrefechas('facturas', "*", 'hora', $fechadesdeanno . "-" . $fechadesdemes . "-" . $fechadesdedia, $fechahastaanno . "-" . $fechahastames . "-" . $fechahastadia);
    $haber = 0;
    foreach ($contenidofacturastabla as $linea) {
        $contenidofacturas[] = array($linea[0], $linea[6]);
        $haber+=$linea[6];
    }
    //gastos
    $contenidogastostabla = array();
    $contenidogastostabla = DB::getentrefechas('gastos', "*", 'fecha', $fechadesdeanno . "-" . $fechadesdemes . "-" . $fechadesdedia, $fechahastaanno . "-" . $fechahastames . "-" . $fechahastadia);
    $debe = 0;
    foreach ($contenidogastostabla as $linea) {
        $contenidogastos[] = array($linea[0], $linea[6]);
        $debe+=$linea[6];
    }
}

// Ponemos a disposición de la plantilla los datos necesarios
$smarty->assign('usuario', $_SESSION['usuario']);
$smarty->assign('phpself', $_SERVER['PHP_SELF']);
$smarty->assign('script', $script);
$smarty->assign('title', 'Contabilidad');
$smarty->assign('titlemenu', 'Contabilidad');
$smarty->assign('pagina', 'contabilidad.tpl');
$smarty->assign('contenidofacturas', $contenidofacturas);
$smarty->assign('contenidogastos', $contenidogastos);
$smarty->assign('haber', $haber);
$smarty->assign('debe', $debe);
$smarty->assign('fechadesdedia', $fechadesdedia);
$smarty->assign('fechadesdemes', $fechadesdemes);
$smarty->assign('fechadesdeanno', $fechadesdeanno);
$smarty->assign('fechahastadia', $fechahastadia);
$smarty->assign('fechahastames', $fechahastames);
$smarty->assign('fechahastaanno', $fechahastaanno);

// Mostramos la plantilla
$smarty->display('cuerpo.tpl');
?>