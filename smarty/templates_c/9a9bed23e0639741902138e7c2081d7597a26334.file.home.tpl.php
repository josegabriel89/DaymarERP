<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-09 13:41:09
         compiled from ".\smarty\templates\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20972559e5dd51c4346-67907882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a9bed23e0639741902138e7c2081d7597a26334' => 
    array (
      0 => '.\\smarty\\templates\\home.tpl',
      1 => 1424075865,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20972559e5dd51c4346-67907882',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_559e5dd5257fa2_60441727',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559e5dd5257fa2_60441727')) {function content_559e5dd5257fa2_60441727($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
