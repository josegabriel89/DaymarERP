<?php
/* Smarty version 3.1.29, created on 2016-04-03 15:43:26
  from "D:\Apuntes\Dropbox\Proyectos\Daymar\smarty\templates\crearcliente.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57011dfee64364_28376956',
  'file_dependency' => 
  array (
    'e10ad753aee5978d70b4b0ed9bc42ae3e43b2259' => 
    array (
      0 => 'D:\\Apuntes\\Dropbox\\Proyectos\\Daymar\\smarty\\templates\\crearcliente.tpl',
      1 => 1457271508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57011dfee64364_28376956 ($_smarty_tpl) {
?>
<div class='campo'>
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

    <?php if (($_smarty_tpl->tpl_vars['cantidadtelefonos']->value == true)) {?>
        <?php
$_smarty_tpl->tpl_vars['valor'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['valor']->step = 1;$_smarty_tpl->tpl_vars['valor']->total = (int) ceil(($_smarty_tpl->tpl_vars['valor']->step > 0 ? $_smarty_tpl->tpl_vars['num']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['num']->value)+1)/abs($_smarty_tpl->tpl_vars['valor']->step));
if ($_smarty_tpl->tpl_vars['valor']->total > 0) {
for ($_smarty_tpl->tpl_vars['valor']->value = 1, $_smarty_tpl->tpl_vars['valor']->iteration = 1;$_smarty_tpl->tpl_vars['valor']->iteration <= $_smarty_tpl->tpl_vars['valor']->total;$_smarty_tpl->tpl_vars['valor']->value += $_smarty_tpl->tpl_vars['valor']->step, $_smarty_tpl->tpl_vars['valor']->iteration++) {
$_smarty_tpl->tpl_vars['valor']->first = $_smarty_tpl->tpl_vars['valor']->iteration == 1;$_smarty_tpl->tpl_vars['valor']->last = $_smarty_tpl->tpl_vars['valor']->iteration == $_smarty_tpl->tpl_vars['valor']->total;?>
            <input type='text' name='telefono<?php echo $_smarty_tpl->tpl_vars['valor']->value;?>
' maxlength="50" /><br/>
        <?php }
}
?>

        <input type='submit' name='mas' value='+'/>
        <?php if (($_smarty_tpl->tpl_vars['num']->value != 1)) {?>
            <input type='submit' name='menos' value='-'/>
        <?php }?>

    <?php } else { ?>
        <input type='text' name='telefono1' maxlength="50" /><br/>
    <?php }?>
</div><?php }
}
