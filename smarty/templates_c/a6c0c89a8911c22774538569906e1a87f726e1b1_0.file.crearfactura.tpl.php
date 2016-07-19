<?php
/* Smarty version 3.1.29, created on 2016-03-06 19:29:50
  from "D:\Apuntes\Dropbox\Proyectos\daymar\smarty\templates\crearfactura.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56dc771e8f5155_19337967',
  'file_dependency' => 
  array (
    'a6c0c89a8911c22774538569906e1a87f726e1b1' => 
    array (
      0 => 'D:\\Apuntes\\Dropbox\\Proyectos\\daymar\\smarty\\templates\\crearfactura.tpl',
      1 => 1457285148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56dc771e8f5155_19337967 ($_smarty_tpl) {
?>
<div class='campo'>
    <label for='cod' >Codigo:</label><br/>
    <input type='text' name='cod' maxlength="50" /><br/>
    <!--                    Crear generador automatico de codigos, aun asi se puede 
    mostrar en pantalla pero con el label bloqueado-->
</div>
<div class='campo'>
    <label for='fecha' >Fecha:</label><br/>
    <input type='date' name='fecha' id="fechafactura"/><br/>
</div>
<?php ob_start();
echo $_smarty_tpl->tpl_vars['file2']->value;
$_tmp2=ob_get_clean();
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_tmp2, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


    <table border="1px">
        <tr>       
            <th>Clientes</th>
        </tr> 
        <?php
$_from = $_smarty_tpl->tpl_vars['clientes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_fila_0_saved_item = isset($_smarty_tpl->tpl_vars['fila']) ? $_smarty_tpl->tpl_vars['fila'] : false;
$_smarty_tpl->tpl_vars['fila'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['fila']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['fila']->value) {
$_smarty_tpl->tpl_vars['fila']->_loop = true;
$__foreach_fila_0_saved_local_item = $_smarty_tpl->tpl_vars['fila'];
?>
            <tr>
                <?php
$_from = $_smarty_tpl->tpl_vars['fila']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_dato_1_saved_item = isset($_smarty_tpl->tpl_vars['dato']) ? $_smarty_tpl->tpl_vars['dato'] : false;
$_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['dato']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->value) {
$_smarty_tpl->tpl_vars['dato']->_loop = true;
$__foreach_dato_1_saved_local_item = $_smarty_tpl->tpl_vars['dato'];
?>
                    <td><?php echo $_smarty_tpl->tpl_vars['dato']->value;?>
</td>
                <?php
$_smarty_tpl->tpl_vars['dato'] = $__foreach_dato_1_saved_local_item;
}
if ($__foreach_dato_1_saved_item) {
$_smarty_tpl->tpl_vars['dato'] = $__foreach_dato_1_saved_item;
}
?>
                <td><input type="submit" name="elegir" value="X">
                    <input type="hidden" name="oculto" value="<?php echo $_smarty_tpl->tpl_vars['fila']->value[0];?>
"></td>
            </tr>
        <?php
$_smarty_tpl->tpl_vars['fila'] = $__foreach_fila_0_saved_local_item;
}
if ($__foreach_fila_0_saved_item) {
$_smarty_tpl->tpl_vars['fila'] = $__foreach_fila_0_saved_item;
}
?>
    </table>
    <table border="1px">
        <tr>       
            <th>Elementos</th>
        </tr> 
        <?php
$_from = $_smarty_tpl->tpl_vars['elementos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_fila_2_saved_item = isset($_smarty_tpl->tpl_vars['fila']) ? $_smarty_tpl->tpl_vars['fila'] : false;
$_smarty_tpl->tpl_vars['fila'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['fila']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['fila']->value) {
$_smarty_tpl->tpl_vars['fila']->_loop = true;
$__foreach_fila_2_saved_local_item = $_smarty_tpl->tpl_vars['fila'];
?>
            <tr>
                <?php
$_from = $_smarty_tpl->tpl_vars['fila']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_dato_3_saved_item = isset($_smarty_tpl->tpl_vars['dato']) ? $_smarty_tpl->tpl_vars['dato'] : false;
$_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['dato']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->value) {
$_smarty_tpl->tpl_vars['dato']->_loop = true;
$__foreach_dato_3_saved_local_item = $_smarty_tpl->tpl_vars['dato'];
?>
                    <td><?php echo $_smarty_tpl->tpl_vars['dato']->value;?>
</td>
                <?php
$_smarty_tpl->tpl_vars['dato'] = $__foreach_dato_3_saved_local_item;
}
if ($__foreach_dato_3_saved_item) {
$_smarty_tpl->tpl_vars['dato'] = $__foreach_dato_3_saved_item;
}
?>
                <td><input type="submit" name="elegir" value="X">
                    <input type="hidden" name="oculto" value="<?php echo $_smarty_tpl->tpl_vars['fila']->value[0];?>
"></td>
            </tr>
        <?php
$_smarty_tpl->tpl_vars['fila'] = $__foreach_fila_2_saved_local_item;
}
if ($__foreach_fila_2_saved_item) {
$_smarty_tpl->tpl_vars['fila'] = $__foreach_fila_2_saved_item;
}
?>
    </table>
<div class='campo'>
    <label for='precio' >Descuento:</label><br/>
    <input type='number' name='descuento' step="any" value="0"/><br/>
</div>
<div class='campo'>
    <label for='precio' >Base imponible:</label><br/>
    <input type='number' name='descuento' step="any" value="0"/><br/>
</div>
<div class='campo'>
    <label for='precio' >Tipo de IVA:</label><br/>
    <input type='number' name='descuento' step="any" value="0"/><br/>
</div>
<div class='campo'>
    <label for='precio' >IVA:</label><br/>
    <input type='number' name='descuento' step="any" value="0"/><br/>
</div>
<div class='campo'>
    <label for='precio' >TOTAL:</label><br/>
    <input type='number' name='descuento' step="any" value="0"/><br/>
</div><?php }
}
