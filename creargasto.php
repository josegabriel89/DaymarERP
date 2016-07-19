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

//Script para calcular precios
$script = array();

$script[] = "function calculariva(){
        console.log(\"calculariva\");
            var iva;
            var precio;
            var precioiva;                
            var poriva;                
                poriva=parseFloat(document.getElementById(\"poriva\").value);
                iva=parseFloat(document.getElementById(\"iva\").value);
                precio= iva/poriva*100;
                precioiva= iva/poriva*(100+poriva);
                document.getElementById(\"precio\").value=precio;
                document.getElementById(\"precioiva\").value=precioiva;
                debugger;
            }
            
            function calcularprecio(){
            var iva;
            var precio;
            var precioiva;                
            var poriva;       
                poriva=parseFloat(document.getElementById(\"poriva\").value);
                precio=parseFloat(document.getElementById(\"precio\").value);
                iva= precio*poriva/100;
                precioiva= precio+iva;
                document.getElementById(\"iva\").value=iva;
                document.getElementById(\"precioiva\").value=precioiva;
            }
            
            function calcularprecioiva(){
            var iva;
            var precio;
            var precioiva;                
            var poriva; 
                poriva=parseFloat(document.getElementById(\"poriva\").value);
                precioiva=parseFloat(document.getElementById(\"precioiva\").value);
                iva= precioiva/(100+poriva)*poriva;
                precio= precioiva/(100+poriva)*100;
                document.getElementById(\"iva\").value=iva;
                document.getElementById(\"precio\").value=precio;
            }
            
            function inicio (){
            var iva;
            var precio;
            var precioiva;
            var poriva;
            iva= document.getElementById(\"iva\");
            iva.addEventListener(\"blur\",  calculariva);
            precio=document.getElementById(\"precio\");
            precio.addEventListener(\"blur\",  calcularprecio);
            precioiva=document.getElementById(\"precioiva\");
            precioiva.addEventListener(\"blur\",  calcularprecioiva);
            poriva=document.getElementById(\"poriva\");
            poriva.addEventListener(\"click\",  calcularprecio);
        }
        window.addEventListener(\"load\", inicio);";

// Y comprobamos que el usuario se haya autentificado
if (!isset($_SESSION['usuario'])) {
    die("Error - debe <a href='login.php'>identificarse</a>.<br />");
}
//calcular codigo
$hora = getdate();
if (strlen($hora['hours']) == 1)$hora['hours'] = '0' . $hora['hours'];
if (strlen($hora['minutes']) == 1)$hora['minutes'] = '0' . $hora['minutes'];
if (strlen($hora['seconds']) == 1)$hora['seconds'] = '0' . $hora['seconds'];
if (strlen($hora['yday']) == 1)$hora['yday'] = '00' . $hora['yday'];
if (strlen($hora['yday']) == 2)$hora['yday'] = '0' . $hora['yday'];
$codigo = strtoupper("G" . dechex($hora['year'] . $hora['yday']) . dechex($hora['hours'] . $hora['minutes'] . $hora['seconds']));

if (isset($_POST['crear'])) {
    if (isset($_POST['cod']) && isset($_POST['nombre']) && $_POST['precio'] != 0) {
        //mirar condiciones, si iva y precio son igual a 0. buscar comportamiento logico
        $columnas = array('cod_gasto', 'nombre', 'descripcion', 'fecha', 'precio', 'iva', 'precio_iva', 'usuario');
        $datos = array($_POST['cod'], $_POST['nombre'], $_POST['descripcion'], $_POST['fecha'], $_POST['precio'], $_POST['iva'], $_POST['precioiva'], $_SESSION['usuario']);
        DB::adddato('gastos', $columnas, $datos);
    } else {
        $scriptvalor = 'alert("Los siguientes campos son obligatorios:';
        if (!(isset($_POST['cod']))) {
            $scriptvalor.='\nCodigo de gasto';
        }
        if (!(isset($_POST['nombre']))) {
            $scriptvalor.='\nNombre del gasto';
        }
        if ($_POST['precio'] == 0) {
            $scriptvalor.='\nEl gasto tiene que tener un valor';
        }
        $scriptvalor.='")';
        $script[] = $scriptvalor;
    }
}


// Ponemos a disposición de la plantilla los datos necesarios
$smarty->assign('usuario', $_SESSION['usuario']);
$smarty->assign('phpself', $_SERVER['PHP_SELF']);
$smarty->assign('tipoelementos', "gastos");
$smarty->assign('tipoelemento', "gasto");
$smarty->assign('listaphp', "listagastos.php");
$smarty->assign('codigo', $codigo);
$smarty->assign('date', date("Y-m-d"));
$smarty->assign('script', $script);
$smarty->assign('title', 'Crear gastos');
$smarty->assign('titlemenu', 'Crear gastos');
$smarty->assign('file', "creargasto.tpl");
$smarty->assign('pagina', 'crear.tpl');

// Mostramos la plantilla
$smarty->display('cuerpo.tpl');
?>
