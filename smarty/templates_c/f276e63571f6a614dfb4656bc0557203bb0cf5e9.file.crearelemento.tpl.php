<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-09 13:48:20
         compiled from ".\smarty\templates\crearelemento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11770559e5f84f28d75-27986032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f276e63571f6a614dfb4656bc0557203bb0cf5e9' => 
    array (
      0 => '.\\smarty\\templates\\crearelemento.tpl',
      1 => 1428691440,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11770559e5f84f28d75-27986032',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_559e5f8502b610_98465884',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559e5f8502b610_98465884')) {function content_559e5f8502b610_98465884($_smarty_tpl) {?><div class='campo'>
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
