<?php
/* Smarty version 3.1.29, created on 2016-06-20 23:33:02
  from "D:\Apuntes\Drive\DaymarERP\smarty\templates\crearcliente.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5768610ea10a84_62603841',
  'file_dependency' => 
  array (
    '8604698d12b3133e3cf2086dfdd667638581c544' => 
    array (
      0 => 'D:\\Apuntes\\Drive\\DaymarERP\\smarty\\templates\\crearcliente.tpl',
      1 => 1466458381,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5768610ea10a84_62603841 ($_smarty_tpl) {
?>
<div class='campo <?php if (($_smarty_tpl->tpl_vars['tipoelementos']->value == 'clientes')) {?>col-lg-6 col-xs-12<?php }?>'>
    <label for='dni' >DNI:</label><br/>
    <input type='text' class="form-control" name='dni' maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['valordni']->value;?>
"/><br/>
</div>
<div class='campo <?php if (($_smarty_tpl->tpl_vars['tipoelementos']->value == 'clientes')) {?>col-lg-6 col-xs-12<?php }?>'>
    <label for='nombre' >Nombre:</label><br/>
    <input type='text' class="form-control" name='nombre' maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['valornombre']->value;?>
"/><br/>
</div>
<div class='campo  <?php if (($_smarty_tpl->tpl_vars['tipoelementos']->value == 'clientes')) {?>col-lg-6 col-xs-12<?php }?>'>
    <label for='apellido1' >1er Apellido:</label><br/>
    <input type='text' class="form-control" name='apellido1' maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['valorapellido1']->value;?>
"/><br/>
</div>
<div class='campo  <?php if (($_smarty_tpl->tpl_vars['tipoelementos']->value == 'clientes')) {?>col-lg-6 col-xs-12<?php }?>'>
    <label for='apellido2' >2º Apellido:</label><br/>
    <input type='text' class="form-control" name='apellido2' maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['valorapellido2']->value;?>
"/><br/>
</div>
<div class='campo  <?php if (($_smarty_tpl->tpl_vars['tipoelementos']->value == 'clientes')) {?>col-lg-12 col-xs-12<?php }?>'>
    <label for='direccion' >Direccion:</label><br/>
    <input type='text' class="form-control" name='direccion' maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['valordireccion']->value;?>
"/><br/>
</div>
<div class='campo  <?php if (($_smarty_tpl->tpl_vars['tipoelementos']->value == 'clientes')) {?>col-lg-6 col-xs-12<?php }?>'>
    <label for='localidad' >Localidad:</label><br/>
    <input type='text' class="form-control" name='localidad' maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['valorlocalidad']->value;?>
"/><br/>
</div>
<div class='campo  <?php if (($_smarty_tpl->tpl_vars['tipoelementos']->value == 'clientes')) {?>col-lg-6 col-xs-12<?php }?>'>
    <label for='provincia' >Provincia:</label><br/>
    <input type='text' class="form-control" name='provincia' maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['valorprovincia']->value;?>
"/><br/>
</div>
<?php
$_smarty_tpl->tpl_vars['valor'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['valor']->step = 1;$_smarty_tpl->tpl_vars['valor']->total = (int) ceil(($_smarty_tpl->tpl_vars['valor']->step > 0 ? $_smarty_tpl->tpl_vars['num']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['num']->value)+1)/abs($_smarty_tpl->tpl_vars['valor']->step));
if ($_smarty_tpl->tpl_vars['valor']->total > 0) {
for ($_smarty_tpl->tpl_vars['valor']->value = 1, $_smarty_tpl->tpl_vars['valor']->iteration = 1;$_smarty_tpl->tpl_vars['valor']->iteration <= $_smarty_tpl->tpl_vars['valor']->total;$_smarty_tpl->tpl_vars['valor']->value += $_smarty_tpl->tpl_vars['valor']->step, $_smarty_tpl->tpl_vars['valor']->iteration++) {
$_smarty_tpl->tpl_vars['valor']->first = $_smarty_tpl->tpl_vars['valor']->iteration == 1;$_smarty_tpl->tpl_vars['valor']->last = $_smarty_tpl->tpl_vars['valor']->iteration == $_smarty_tpl->tpl_vars['valor']->total;?>
    <div class='campo  <?php if (($_smarty_tpl->tpl_vars['tipoelementos']->value == 'clientes')) {?>col-lg-3 col-xs-12<?php }?>'>
        <label for='telefono' ><?php if (($_smarty_tpl->tpl_vars['valor']->value == 1)) {?>Telefonos:<?php }?> </label><br/>
        <input type='text' class="form-control" name='telefono<?php echo $_smarty_tpl->tpl_vars['valor']->value;?>
' maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['valortelefonoarray']->value[$_smarty_tpl->tpl_vars['valor']->value-1];?>
"/><br/>
    </div>
<?php }
}
?>

<div class='campo'>
    <input type='submit' name='mas' value='+'/>
    <?php if (($_smarty_tpl->tpl_vars['num']->value != 1)) {?>
        <input type='submit' name='menos' value='-'/>
    <?php }?>
</div><?php }
}
