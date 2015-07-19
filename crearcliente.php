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

// Numero de telefonos en la sesion
if (!isset($_SESSION['numerotelefonos'])){
$_SESSION['numerotelefonos']=1;
}
     
// Mas y menos telefonos
if(isset($_POST['mas']))$_SESSION['numerotelefonos']++;
if(isset($_POST['menos']))$_SESSION['numerotelefonos']--;



//if ($telefonos > 0) {
//    for ($i = 0; $i < $telefonos; $i++) {
//        echo"<input type='text' name='telefono" . $i . "' maxlength=\"50\"><br/>";
//    }
//    echo "<input type='submit' name='menos' value='-'/>";
//}


// Y comprobamos que el usuario se haya autentificado
if (!isset($_SESSION['usuario']))die("Error - debe <a href='login.php'>identificarse</a>.<br />");

//Crear cliente
if (isset($_POST['crear'])) {
    if (isset($_POST['dni']) && isset($_POST['nombre']) && isset($_POST['telefono1']) && $_POST['dni']!="" && $_POST['nombre']!="" && $_POST['telefono1']!="") {
        $columnas = array('dni', 'nombre', 'apellido1', 'apellido2', 'direccion', 'localidad', 'provincia');
        $datos = array($_POST['dni'], $_POST['nombre'], $_POST['apellido1'], $_POST['apellido2'], $_POST['direccion'], $_POST['localidad'], $_POST['provincia']);            
        DB::adddato('clientes', $columnas, $datos);
        $columnastelefono = array('telefono', 'dni_cliente');       
        $datostelefono = array();
        $n=1;
        $tel= "telefono".$n;
        while(isset($_POST[$tel])){
            $datostelefono[] = array($_POST[$tel], $_POST['dni']);
            $n++;
            $tel= "telefono".$n;
        }
        DB::adddatos('telefonos', $columnastelefono, $datostelefono);
    }
}

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