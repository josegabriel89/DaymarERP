<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-04 20:21:19
         compiled from ".\smarty\templates\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:798156d9e02f124c62-18560867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9ee0011c75577e339a617ee72551521e9847444' => 
    array (
      0 => '.\\smarty\\templates\\home.tpl',
      1 => 1424075865,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '798156d9e02f124c62-18560867',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56d9e02f1e0799_93032155',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d9e02f1e0799_93032155')) {function content_56d9e02f1e0799_93032155($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- Daymar Edificacion -->
<!-- Menu principal: home.php -->
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Home: Daymar Edificación</title>
        <link href="cssdaymar.css" rel="stylesheet" type="text/css">
    </head>
    <body>   
        <div id="encabezado">
            <h1>Menu Principal</h1>
            <div id="reloj">
                <?php echo '<script'; ?>
 type="text/javascript" src="include/clock24.js"><?php echo '</script'; ?>
>
                <span class="clock24s" id="clock24_17367" style="color:#6393C3;">reloj</span>
                <?php echo '<script'; ?>
 type="text/javascript">
                    var clock24_17367 = new clock24('17367', '60', '%HH:%nn:%ss %P', 'es');
                    clock24_17367.daylight('ES');
                    clock24_17367.refresh();
                <?php echo '</script'; ?>
>
            </div>
        </div>

        <div id="contenido">
            <div id="contenidomenu">
                <h2>Contabilidad:</h2>
                <input type="button" onclick="location.href = 'contabilidad.php'" name="modificarcuenta" value="Contabilidad">
            </div>
            <div id="contenidomenu">
                <h2>Facturas:</h2>
                <input type="button" onclick="location.href = 'listafacturas.php'" name="modificarcuenta" value="Lista de Facturas">
                <input type="button" onclick="location.href = 'crearfactura.php'" name="modificarcuenta" value="Crear factura">
            </div>
            <div id="contenidomenu">
                <h2>Clientes:</h2>
                <input type="button" onclick="location.href = 'listaclientes.php'" name="modificarcuenta" value="Lista de clientes">
                <input type="button" onclick="location.href = 'crearcliente.php'" name="modificarcuenta" value="Crear cliente">
            </div>
            <div id="contenidomenu">
                <h2>Gastos:</h2>
                <input type="button" onclick="location.href = 'listagastos.php'" name="modificarcuenta" value="Lista de gastos">
                <input type="button" onclick="location.href = 'creargasto.php'" name="modificarcuenta" value="Crear gasto">
            </div>
            <div id="contenidomenu">
                <h2>Elementos</h2>
                <input type="button" onclick="location.href = 'listaelementos.php'" name="modificarcuenta" value="Lista de elementos">
                <input type="button" onclick="location.href = 'crearelemento.php'" name="modificarcuenta" value="Crear elemento">
            </div>
        </div>

        <div id="pie">
            <span class="texto">Usuario: </span>
            <span class="texto"><?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
</span>
            <form id="form_logout" action=logout.php method="post">
                <input type="submit" name="objeto" value="Salir">
            </form>
        </div>
    </body>
</html><?php }} ?>
