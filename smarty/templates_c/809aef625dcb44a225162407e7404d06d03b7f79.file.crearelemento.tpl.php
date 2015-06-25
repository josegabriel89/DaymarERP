<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-17 08:46:57
         compiled from "./smarty/templates/crearelemento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150666955154e2f1f1f36668-92904201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '809aef625dcb44a225162407e7404d06d03b7f79' => 
    array (
      0 => './smarty/templates/crearelemento.tpl',
      1 => 1424158258,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150666955154e2f1f1f36668-92904201',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54e2f1f2078184_32928222',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e2f1f2078184_32928222')) {function content_54e2f1f2078184_32928222($_smarty_tpl) {?><div class='campo'>
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
    <label for='precio' >Precio:</label><br/>
    <input type='number' name='precio' step="any" value="0"/><br/>
</div>
<div class='campo'>
    <label for='coste' >Coste:</label><br/>
    <input type='number' name='coste' step="any" value="0"/><br/>
</div><?php }} ?>
