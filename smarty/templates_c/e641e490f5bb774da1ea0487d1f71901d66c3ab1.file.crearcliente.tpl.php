<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-18 14:20:58
         compiled from "./smarty/templates/crearcliente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141492833754e2f36eaccbc4-78349376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e641e490f5bb774da1ea0487d1f71901d66c3ab1' => 
    array (
      0 => './smarty/templates/crearcliente.tpl',
      1 => 1424265655,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141492833754e2f36eaccbc4-78349376',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54e2f36eadb678_79589968',
  'variables' => 
  array (
    'num' => 0,
    'valor' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e2f36eadb678_79589968')) {function content_54e2f36eadb678_79589968($_smarty_tpl) {?><div class='campo'>
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
</div><?php }} ?>
