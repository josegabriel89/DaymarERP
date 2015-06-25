<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-17 08:45:55
         compiled from "./smarty/templates/creargasto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112842162854e2f1b3a3a8a5-33483105%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9d20b4b0aa5c82ce8685a220b5cf181e5ab73ad' => 
    array (
      0 => './smarty/templates/creargasto.tpl',
      1 => 1424158195,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112842162854e2f1b3a3a8a5-33483105',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54e2f1b3ab88e0_11943464',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e2f1b3ab88e0_11943464')) {function content_54e2f1b3ab88e0_11943464($_smarty_tpl) {?><div class='campo'>
    <label for='cod' >Codigo:</label><br/>
    <input type='text' name='cod' maxlength="50" /><br/>
    <!--                    Crear generador automatico de codigos, aun asi se puede 
    mostrar en pantalla pero con el label bloqueado-->
</div>
<div class='campo'>
    <label for='nombre' >Nombre:</label><br/>
    <input type='text' name='nombre' maxlength="50" /><br/>
</div>
<div class='campo'>
    <label for='descripcion' >Descripcion:</label><br/>
    <textarea cols="100" rows="6" name="descripcion"></textarea><br>
</div>
<div class='campo'>
    <label for='precio' >Precio:</label><br/>
    <input type='number' name='precio' step="any" value="0"/><br/>
</div>
<div class='campo'>
    <label for='iva' >Iva:</label><br/>
    <input type='number' name='iva' step="any" value="0"/><br/>
</div>
<div class='campo'>
    <label for='precioiva' >Precio con iva:</label><br/>
    <input type='number' name='precio_iva' step="any" value="0"/><br/>
</div>
<!--                Mirar una manera, con ocultos, calculos en php, mirar si poder hacerlo con ajax
                    o que me lo calcule el mismo html cuando elija el iva--><?php }} ?>
