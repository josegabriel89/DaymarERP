<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-14 20:03:59
         compiled from ".\smarty\templates\crearelemento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31747552d568f663073-03444017%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aefb2ffbb28cd1556790dcc4e739d21c789761f2' => 
    array (
      0 => '.\\smarty\\templates\\crearelemento.tpl',
      1 => 1428691440,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31747552d568f663073-03444017',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_552d568f6e9c76_50978318',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552d568f6e9c76_50978318')) {function content_552d568f6e9c76_50978318($_smarty_tpl) {?><div class='campo'>
    <label for='cod' >Codigo:</label><br/>
    <input type='text' name='cod' maxlength="50" /><br/>
    <!--                    Crear generador automatico de codigos, aun asi se puede 
    mostrar en pantalla pero con el label bloqueado-->
</div>
<div class='campo'>
    <label for='nombre' >Nombre:</label><br/>
    <input type='text' name='nombre' maxlength="50"  required/><br/>
</div>
<div class='campo'>
    <label for='precio' >Precio:</label><br/>
    <input type='number' name='precio' step="any" value="0" required/><br/>
</div>
<div class='campo'>
    <label for='coste' >Coste:</label><br/>
    <input type='number' name='coste' step="any" value="0"/><br/>
</div><?php }} ?>
