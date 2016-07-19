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

//borrar telefonos
//boorar cliente
if (isset($_POST['borrar'])) {
    $facturas = DB::getdatos('facturas', 'dni_cliente', $_POST['oculto']);
    if (count($facturas) == 0) {
        DB::deletedatos('telefonos', 'dni_cliente', $_POST['oculto']);
        DB::deletedatos('clientes', 'dni', $_POST['oculto']);
    } else {
        $scriptvalor= 'alert("Hay facturas asociadas a este cliente. No se puede borrar")';
        $script[] = $scriptvalor;
    }
}

$indicee = array();
$indicee = DB::getindice('clientes');
$contenidoo = array();
$contenidoo = DB::gettabla('clientes');

$j = 0;
//Añadir telefonos
for ($i = 0; $i < count($contenidoo); $i++) {
    $telefonos = DB::getdatos('telefonos', 'dni_cliente', $contenidoo[$i][0]);
    $tam = count($telefonos);
    if ($tam == 1) {
        //Si hay un solo telefono mostarlo
        $contenidoo[$i][] = $telefonos[0][0];
    } else {
        //Generar boton
        $button = "<button id='test" . $j . "' onClick='showAlert" . $j . "()' >Mostrar</button>";
        $contenidoo[$i][] = $button;
        //Concadenar el script para que se cree en la pagina
        $scriptvalor = "function showAlert" . $j . "() {
                            alert('";
        for ($w = 0; $w < $tam; $w++) {
            $scriptvalor.= $telefonos[$w][0] . ' \n';
        }
        $scriptvalor.= "');}";
        $script[] = $scriptvalor;
        /*Mostrar diractamente los telefonos
         *  $tel="";
          for ($w = 0; $w < $tam; $w++) {
          $tel.= $telefonos[$w][0].'<br>';
          }
          $contenidoo[$i][]=$tel; */
    }
    $j++;
}

//Añadir el indice de telefonos a la tabla
if (count($contenidoo) > 0) {
    $indicee[] = 'Telefono';
    $indicee[] = "Borrar";
}

// Ponemos a disposición de la plantilla los datos necesarios
$smarty->assign('usuario', $_SESSION['usuario']);
$smarty->assign('tipolistap', 'clientes');
$smarty->assign('tipolistas', 'cliente');
$smarty->assign('indicee', $indicee);
$smarty->assign('contenidoo', $contenidoo);
$smarty->assign('crearphp', 'crearcliente.php');
$smarty->assign('paginaactual', 'listaclientes.php');
$smarty->assign('script', $script);
$smarty->assign('title', 'Lista clientes');
$smarty->assign('titlemenu', 'Lista de clientes');
$smarty->assign('pagina', 'listas.tpl');

// Mostramos la plantilla
$smarty->display('cuerpo.tpl');
?>