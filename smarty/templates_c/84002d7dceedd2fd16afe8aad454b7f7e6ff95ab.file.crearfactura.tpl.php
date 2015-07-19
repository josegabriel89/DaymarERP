<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-09 13:43:37
         compiled from ".\smarty\templates\crearfactura.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8408559e5e69e02c87-70244477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84002d7dceedd2fd16afe8aad454b7f7e6ff95ab' => 
    array (
      0 => '.\\smarty\\templates\\crearfactura.tpl',
      1 => 1428687676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8408559e5e69e02c87-70244477',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_559e5e69e4a9c3_22124999',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559e5e69e4a9c3_22124999')) {function content_559e5e69e4a9c3_22124999($_smarty_tpl) {?><div class='campo'>
    <label for='cod' >Codigo:</label><br/>
    <input type='text' name='cod' maxlength="50" /><br/>
    <!--                    Crear generador automatico de codigos, aun asi se puede 
    mostrar en pantalla pero con el label bloqueado-->
</div>
<div class='campo'>
    <label for='precio' >Descuento:</label><br/>
    <input type='number' name='descuento' step="any" value="0"/><br/>
</div>
<div class='campo'>

</div>
<div class='campo'>
    <label for='dnicliente' >Dni Cliente:</label><br/>
    <input type='text' name='dnicliente' maxlength="9" /><br/>
</div><?php }} ?>
