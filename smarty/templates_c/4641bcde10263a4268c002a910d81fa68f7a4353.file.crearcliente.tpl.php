<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-17 08:45:35
         compiled from "./smarty/templates/crearcliente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120642665354e1bc364f1747-12220569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4641bcde10263a4268c002a910d81fa68f7a4353' => 
    array (
      0 => './smarty/templates/crearcliente.tpl',
      1 => 1424159128,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120642665354e1bc364f1747-12220569',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54e1bc364f3e12_82804413',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e1bc364f3e12_82804413')) {function content_54e1bc364f3e12_82804413($_smarty_tpl) {?><div class='campo'>
    <label for='dni' >DNI:</label><br/>
    <input type='text' name='dni' maxlength="50" /><br/>
</div>
<div class='campo'>
    <label for='nombre' >Nombre:</label><br/>
    <input type='text' name='nombre' maxlength="50" /><br/>
</div>
<div class='campo'>
    <label for='apellido1' >1er Apellido:</label><br/>
    <input type='text' name='apellido1' maxlength="50" /><br/>
</div>
<div class='campo'>
    <label for='apellido2' >2º Apellido:</label><br/>
    <input type='text' name='apellido2' maxlength="50" /><br/>
</div>
<div class='campo'>
    <label for='direccion' >Direccion:</label><br/>
    <input type='text' name='direccion' maxlength="50" /><br/>
</div>
<div class='campo'>
    <label for='localidad' >Localidad:</label><br/>
    <input type='text' name='localidad' maxlength="50" /><br/>
</div>
<div class='campo'>
    <label for='provincia' >Provincia:</label><br/>
    <input type='text' name='provincia' maxlength="50" /><br/>
</div>
<div class='campo'>
    <label for='telefono' >Telefonos:</label><br/>
    
    <input type='text' name='telefono0' maxlength="50" /><br/>
    
           <input type='submit' name='mas' value='+'/>
</div><?php }} ?>
