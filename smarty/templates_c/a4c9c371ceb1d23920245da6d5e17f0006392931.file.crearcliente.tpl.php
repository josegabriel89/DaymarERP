<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-06 14:38:32
         compiled from ".\smarty\templates\crearcliente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1323856db2455a4cc16-17556346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4c9c371ceb1d23920245da6d5e17f0006392931' => 
    array (
      0 => '.\\smarty\\templates\\crearcliente.tpl',
      1 => 1457271508,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1323856db2455a4cc16-17556346',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56db2455bce137_81865283',
  'variables' => 
  array (
    'cantidadtelefonos' => 0,
    'num' => 0,
    'valor' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56db2455bce137_81865283')) {function content_56db2455bce137_81865283($_smarty_tpl) {?><div class='campo'>
    <label for='dni' >DNI:</label><br/>
    <input type='text' name='dni' maxlength="50"/><br/>
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

    <?php if (($_smarty_tpl->tpl_vars['cantidadtelefonos']->value==true)) {?>
        <?php $_smarty_tpl->tpl_vars['valor'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['valor']->step = 1;$_smarty_tpl->tpl_vars['valor']->total = (int) ceil(($_smarty_tpl->tpl_vars['valor']->step > 0 ? $_smarty_tpl->tpl_vars['num']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['num']->value)+1)/abs($_smarty_tpl->tpl_vars['valor']->step));
if ($_smarty_tpl->tpl_vars['valor']->total > 0) {
for ($_smarty_tpl->tpl_vars['valor']->value = 1, $_smarty_tpl->tpl_vars['valor']->iteration = 1;$_smarty_tpl->tpl_vars['valor']->iteration <= $_smarty_tpl->tpl_vars['valor']->total;$_smarty_tpl->tpl_vars['valor']->value += $_smarty_tpl->tpl_vars['valor']->step, $_smarty_tpl->tpl_vars['valor']->iteration++) {
$_smarty_tpl->tpl_vars['valor']->first = $_smarty_tpl->tpl_vars['valor']->iteration == 1;$_smarty_tpl->tpl_vars['valor']->last = $_smarty_tpl->tpl_vars['valor']->iteration == $_smarty_tpl->tpl_vars['valor']->total;?>
            <input type='text' name='telefono<?php echo $_smarty_tpl->tpl_vars['valor']->value;?>
' maxlength="50" /><br/>
        <?php }} ?>
        <input type='submit' name='mas' value='+'/>
        <?php if (($_smarty_tpl->tpl_vars['num']->value!=1)) {?>
            <input type='submit' name='menos' value='-'/>
        <?php }?>

    <?php } else { ?>
        <input type='text' name='telefono1' maxlength="50" /><br/>
    <?php }?>
</div><?php }} ?>
