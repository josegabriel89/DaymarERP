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

/*
  //calcular codigo
  $hora = getdate();
  if (strlen($hora['hours']) == 1)
  $hora['hours'] = '0' . $hora['hours'];
  if (strlen($hora['minutes']) == 1)
  $hora['minutes'] = '0' . $hora['minutes'];
  if (strlen($hora['seconds']) == 1)
  $hora['seconds'] = '0' . $hora['seconds'];
  if (strlen($hora['yday']) == 1)
  $hora['yday'] = '00' . $hora['yday'];
  if (strlen($hora['yday']) == 2)
  $hora['yday'] = '0' . $hora['yday'];
  $codigo = strtoupper("F" . dechex($hora['year']) . dechex($hora['yday']) . dechex($hora['hours']) . dechex($hora['minutes']) . dechex($hora['seconds']));
 */


//Crear codigo de la factura
$fecha = getdate();
$Codigofactura = "FC" . $fecha['year'];
if ($fecha['mon'] < 10) {
    $Codigofactura.="0";
}
$Codigofactura.=$fecha['mon'] . $fecha['mday'];
//Comprobamos las facturas de esa fecha para obtener el numero de la factura
$facturas = array();
$facturas = DB::getentrefechas('facturas', '*', 'hora', $fecha['year'] . "-" . $fecha['mon'] . "-" . $fecha['mday'] . " 00:0:00", $fecha['year'] . "-" . $fecha['mon'] . "-" . ($fecha['mday'] + 1) . " 00:0:00");
$Codigofactura.='-';
if (count($facturas) + 1 < 10) {
    $Codigofactura.="0";
}
$Codigofactura.=count($facturas) + 1;


//Cargamos los datos
$clientes = array();
$clientes = DB::getcolumnadetabla('clientes', 'nombre');
$elementos = array();
$elementos = DB::getcolumnadetabla('elementos', 'cod_elemento');
$elementoscompletos = array();
$elementoscompletos = DB::gettabla('elementos');
$indiceelementos = array();
$indiceelementos = DB::getindice('elementos');

//Declaraciond de variables
$valordni = "";
$valornombre = "";
$valorapellido1 = "";
$valorapellido2 = "";
$valordireccion = "";
$valorlocalidad = "";
$valorprovincia = "";
$valortelefono = "";
$cantidadtelefonos = false;
$valortelefonoarray = array();


// Numero de telefonos en la sesion
if (!isset($_SESSION['numerotelefonos'])) {
    $_SESSION['numerotelefonos'] = 1;
}

// Mas y menos telefonos
if (isset($_POST['mas']))
    $_SESSION['numerotelefonos'] ++;
if (isset($_POST['menos']))
    $_SESSION['numerotelefonos'] --;


for ($index = 0; $index < $_SESSION['numerotelefonos']; $index++) {
    $valortelefonoarray[] = "";
}
$recargarcliente = false;

//Crear factura
if (isset($_POST['crear'])) {
    //crearcliente si eso
    if (isset($_POST['dni']) && isset($_POST['contenidotabla']) && $_POST['dni'] != "" && $_POST['contenidotabla'] != "") {
        $columnas = array('cod_factura', 'dni_cliente', 'descuento', 'tipoiva', 'total', 'usuario');
        $datos = array($Codigofactura, $_POST['dni'], $_POST['descuento'], $_POST['tipoiva'], $_POST['sumatotal'], $_SESSION['usuario']);
        DB::adddato('facturas', $columnas, $datos);

        $columnaselementos = array('cod_factura', 'cod_elemento', 'lineafactura', 'precio_puntual', 'coste_puntual', 'cantidad');
        $contenidotabla = preg_split('/;/', $_POST['contenidotabla']);
        $arrayelementos = array();
        for ($i = 0; $i < count($contenidotabla); $i+=4) {
            $arrayelementos[] = array($Codigofactura, $contenidotabla[$i], $i / 4, $contenidotabla[$i + 1], $contenidotabla[$i + 2], $contenidotabla[$i + 3]);
        }
        DB::adddatos('registros', $columnaselementos, $arrayelementos);
    } else {
        $scriptvalor = 'alert("Los siguientes campos son obligatorios:';
        if (!(isset($_POST['dni']) && $_POST['dni'] != "")) {
            $scriptvalor.='\nDNI del cliente';
        } else {
            $recargarcliente = true;
        }
        if (!(isset($_POST['contenidotabla']) && $_POST['contenidotabla'] != "")) {
            $scriptvalor.='\nTiene que haber algun elemento en la factura';
        }
        $scriptvalor.='")';
        $script[] = $scriptvalor;
    }
}


//si se ha seleccionado un cliente cargar sus datos
if (isset($_POST['seleccionarcliente']) || $recargarcliente) {
    if ($recargarcliente) {
        $nombrecliente = $_POST['nombre'];
    } else {
        $nombrecliente = $_POST['seleccionarcliente'];
    }
    $clienteelegido = array();
    $clienteelegido = DB::getfila('clientes', 'nombre', $nombrecliente);
    $valordni = $clienteelegido[0];
    $valornombre = $clienteelegido[1];
    $valorapellido1 = $clienteelegido[2];
    $valorapellido2 = $clienteelegido[3];
    $valordireccion = $clienteelegido[4];
    $valorlocalidad = $clienteelegido[5];
    $valorprovincia = $clienteelegido[6];
    $valortelefonoarray = array();
    $telefonosclienteelegido = DB::getdatos('telefonos', 'dni_cliente', $clienteelegido[0]);
    $tam = count($telefonosclienteelegido);
    $_SESSION['numerotelefonos'] = $tam;
    if ($tam = 0) {
        $_SESSION['numerotelefonos'] = 1;
    }
    foreach ($telefonosclienteelegido as $value) {
        $valortelefonoarray[] = $value[0];
    }
}

// Ponemos a disposición de la plantilla los datos necesarios
$smarty->assign('usuario', $_SESSION['usuario']);
$smarty->assign('phpself', $_SERVER['PHP_SELF']);
$smarty->assign('tipoelementos', "facturas");
$smarty->assign('tipoelemento', "factura");
$smarty->assign('clientes', $clientes);
$smarty->assign('elementos', $elementos);
$smarty->assign('elementoscompletos', $elementoscompletos);
$smarty->assign('indiceelementos', $indiceelementos);
$smarty->assign('listaphp', "listafacturas.php");
$smarty->assign('num', $_SESSION['numerotelefonos']);
$smarty->assign('script', $script);
$smarty->assign('title', 'Crear facturas');
$smarty->assign('titlemenu', 'Crear facturas');
$smarty->assign('file', "crearfactura.tpl");
$smarty->assign('file2', "crearcliente.tpl");
$smarty->assign('pagina', 'crear.tpl');
$smarty->assign('Codigofactura', $Codigofactura);
$smarty->assign('valordni', $valordni);
$smarty->assign('valornombre', $valornombre);
$smarty->assign('valorapellido1', $valorapellido1);
$smarty->assign('valorapellido2', $valorapellido2);
$smarty->assign('valordireccion', $valordireccion);
$smarty->assign('valorlocalidad', $valorlocalidad);
$smarty->assign('valorprovincia', $valorprovincia);
$smarty->assign('valortelefono', $valortelefono);
$smarty->assign('valortelefonoarray', $valortelefonoarray);
$smarty->assign('filejs', 'js/jscrearfactura.js');


// Mostramos la plantilla
$smarty->display('cuerpo.tpl');
?>