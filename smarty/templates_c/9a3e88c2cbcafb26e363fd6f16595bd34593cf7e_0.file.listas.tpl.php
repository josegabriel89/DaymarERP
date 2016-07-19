<?php
/* Smarty version 3.1.29, created on 2016-03-30 12:32:21
  from "D:\Dropbox\Proyectos\Daymar\smarty\templates\listas.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56fbab35da1952_88281191',
  'file_dependency' => 
  array (
    '9a3e88c2cbcafb26e363fd6f16595bd34593cf7e' => 
    array (
      0 => 'D:\\Dropbox\\Proyectos\\Daymar\\smarty\\templates\\listas.tpl',
      1 => 1457299173,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56fbab35da1952_88281191 ($_smarty_tpl) {
?>
    <input type="button" class="btn btn-default" onclick="location.href = '<?php echo $_smarty_tpl->tpl_vars['crearphp']->value;?>
'" name="crear<?php echo $_smarty_tpl->tpl_vars['tipolistas']->value;?>
" value="Crear nuev<?php if ($_smarty_tpl->tpl_vars['tipolistas']->value == "factura") {?>a<?php } else { ?>o<?php }?> <?php echo $_smarty_tpl->tpl_vars['tipolistas']->value;?>
">

    <table class="table table-hover table-striped table-responsive">
        <tr>               
            <?php
$_from = $_smarty_tpl->tpl_vars['indicee']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_indice_0_saved_item = isset($_smarty_tpl->tpl_vars['indice']) ? $_smarty_tpl->tpl_vars['indice'] : false;
$_smarty_tpl->tpl_vars['indice'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['indice']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['indice']->value) {
$_smarty_tpl->tpl_vars['indice']->_loop = true;
$__foreach_indice_0_saved_local_item = $_smarty_tpl->tpl_vars['indice'];
?>
                <th><?php echo $_smarty_tpl->tpl_vars['indice']->value;?>
</th>
                <?php
$_smarty_tpl->tpl_vars['indice'] = $__foreach_indice_0_saved_local_item;
}
if ($__foreach_indice_0_saved_item) {
$_smarty_tpl->tpl_vars['indice'] = $__foreach_indice_0_saved_item;
}
?>
        </tr> 
        <?php
$_from = $_smarty_tpl->tpl_vars['contenidoo']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_fila_1_saved_item = isset($_smarty_tpl->tpl_vars['fila']) ? $_smarty_tpl->tpl_vars['fila'] : false;
$_smarty_tpl->tpl_vars['fila'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['fila']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['fila']->value) {
$_smarty_tpl->tpl_vars['fila']->_loop = true;
$__foreach_fila_1_saved_local_item = $_smarty_tpl->tpl_vars['fila'];
?>
            <tr>
            <form id="form_borrar" action="<?php echo $_smarty_tpl->tpl_vars['paginaactual']->value;?>
" method="post">
                <?php
$_from = $_smarty_tpl->tpl_vars['fila']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_dato_2_saved_item = isset($_smarty_tpl->tpl_vars['dato']) ? $_smarty_tpl->tpl_vars['dato'] : false;
$_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['dato']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->value) {
$_smarty_tpl->tpl_vars['dato']->_loop = true;
$__foreach_dato_2_saved_local_item = $_smarty_tpl->tpl_vars['dato'];
?>
                    <td><?php echo $_smarty_tpl->tpl_vars['dato']->value;?>
</td>
                <?php
$_smarty_tpl->tpl_vars['dato'] = $__foreach_dato_2_saved_local_item;
}
if ($__foreach_dato_2_saved_item) {
$_smarty_tpl->tpl_vars['dato'] = $__foreach_dato_2_saved_item;
}
?>
                <td><input type="submit" name="borrar" value="X">
                    <input type="hidden" name="oculto" value="<?php echo $_smarty_tpl->tpl_vars['fila']->value[0];?>
"></td>
                </tr>
            </form>
        <?php
$_smarty_tpl->tpl_vars['fila'] = $__foreach_fila_1_saved_local_item;
}
if ($__foreach_fila_1_saved_item) {
$_smarty_tpl->tpl_vars['fila'] = $__foreach_fila_1_saved_item;
}
?>
    </table><?php }
}
