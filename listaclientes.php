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
$indicee = DB::getindice('clientes');
$contenidoo = array();
$script = array();
$contenidoo = DB::getlista('clientes', $indicee);

$j = 0;
//Añadir telefonos
for ($i = 0; $i < count($contenidoo); $i++) {
    $telefonos = DB::gettelefonos($contenidoo[$i][0]);
    $tam = count($telefonos);
    if ($tam == 1) {
        //Si hay un solo telefono mostarlo
        $contenidoo[$i][] = $telefonos[0];
    } else {
        //Generar boton
        $button = "<button id='test" . $j . "' onClick='showAlert" . $j . "()' >Click</button>";
        $contenidoo[$i][] = $button;
        //Concadenar el script para que se cree en la pagina
        $scriptvalor = "<script>
                            function showAlert" . $j . "() {
                            alert('";
        for ($w = 0; $w < $tam; $w++) {
            $scriptvalor.= "$telefonos[$w] ";
        }
        $scriptvalor.= "');}</script>";
        $script[]=$scriptvalor;
    }
    $j++; 
}

//Añadir el indice de telefonos a la tabla
$indicee[] = 'Telefono';

// Ponemos a disposición de la plantilla los datos necesarios
$smarty->assign('usuario', $_SESSION['usuario']);
$smarty->assign('tipolistap', 'clientes');
$smarty->assign('tipolistas', 'cliente');
$smarty->assign('indicee', $indicee);
$smarty->assign('contenidoo', $contenidoo);
$smarty->assign('script', $script);
$smarty->assign('crearphp', 'crearcliente.php');

// Mostramos la plantilla
$smarty->display('listas.tpl');
?>