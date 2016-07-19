<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-05 19:17:54
         compiled from ".\smarty\templates\crearelemento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:801756db22d27b9604-65383270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1aa452674d645c19033aebe3306773b70341b6f' => 
    array (
      0 => '.\\smarty\\templates\\crearelemento.tpl',
      1 => 1428691440,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '801756db22d27b9604-65383270',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56db22d27cabb8_89123123',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56db22d27cabb8_89123123')) {function content_56db22d27cabb8_89123123($_smarty_tpl) {?><div class='campo'>
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
