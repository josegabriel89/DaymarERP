<?php
/* Smarty version 3.1.29, created on 2016-06-21 02:32:17
  from "D:\Apuntes\Drive\DaymarERP\smarty\templates\crearfactura.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57688b119ab0f4_12188487',
  'file_dependency' => 
  array (
    'a583f8bc412e0d08d81b84436819275fd06ff401' => 
    array (
      0 => 'D:\\Apuntes\\Drive\\DaymarERP\\smarty\\templates\\crearfactura.tpl',
      1 => 1466469092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57688b119ab0f4_12188487 ($_smarty_tpl) {
?>
<div class="col-lg-7 col-xs-12">
    <div class='campo'>
        <label for='cod' >Codigo:</label><br/>
        <input type='text' class="form-control" name='codfactura' maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['Codigofactura']->value;?>
" ReadOnly /><br/>
    </div>
    

    <div id="facturanuevocliente">
        <label for='cliente' >Cliente:</label><br/>
        <?php ob_start();
echo $_smarty_tpl->tpl_vars['file2']->value;
$_tmp1=ob_get_clean();
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_tmp1, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    </div>
</div>
<span id="a"></span>
<div class="col-lg-5 col-xs-12" id="facturaselmentosaincluir">
    <input type="button" class="btn btn-default" onclick="mostrarlistaclientes()" name="elegircliente" value="Elegir Cliente Existente">
    <input type="button" class="btn btn-default" onclick="mostrarlistaelementos()" name="añadirelemento" value="Lista de Elementos">
    <div id="facturatablaclientes">
        <h3 class="col-xs-12 col-lg-12">Clientes</h3>
        <br>

        
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
                <input type='submit' class="btn btn-default" name='seleccionarcliente' value='<?php echo $_smarty_tpl->tpl_vars['dato']->value;?>
' />
                
            <?php
$_smarty_tpl->tpl_vars['dato'] = $__foreach_dato_1_saved_local_item;
}
if ($__foreach_dato_1_saved_item) {
$_smarty_tpl->tpl_vars['dato'] = $__foreach_dato_1_saved_item;
}
?>
        <?php
$_smarty_tpl->tpl_vars['fila'] = $__foreach_fila_0_saved_local_item;
}
if ($__foreach_fila_0_saved_item) {
$_smarty_tpl->tpl_vars['fila'] = $__foreach_fila_0_saved_item;
}
?>
        
    </div>
    <div id="facturatablaelementos">
        <h3 class="col-xs-12 col-lg-12">Elementos</h3>
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
                <a class="btn btn-default col-xs-12 col-lg-6" onclick="addelemento('<?php echo $_smarty_tpl->tpl_vars['dato']->value;?>
')"><?php echo $_smarty_tpl->tpl_vars['dato']->value;?>
</a>
            <?php
$_smarty_tpl->tpl_vars['dato'] = $__foreach_dato_3_saved_local_item;
}
if ($__foreach_dato_3_saved_item) {
$_smarty_tpl->tpl_vars['dato'] = $__foreach_dato_3_saved_item;
}
?>
        <?php
$_smarty_tpl->tpl_vars['fila'] = $__foreach_fila_2_saved_local_item;
}
if ($__foreach_fila_2_saved_item) {
$_smarty_tpl->tpl_vars['fila'] = $__foreach_fila_2_saved_item;
}
?>
    </div>
</div>
<div class="col-lg-12  col-xs-12">

    <table class="table table-hover table-striped table-responsive" id="tablaelementosprincipal">
        <thead>
            <tr>               
                <?php
$_from = $_smarty_tpl->tpl_vars['indiceelementos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_indice_4_saved_item = isset($_smarty_tpl->tpl_vars['indice']) ? $_smarty_tpl->tpl_vars['indice'] : false;
$_smarty_tpl->tpl_vars['indice'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['indice']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['indice']->value) {
$_smarty_tpl->tpl_vars['indice']->_loop = true;
$__foreach_indice_4_saved_local_item = $_smarty_tpl->tpl_vars['indice'];
?>
                    <th><?php echo $_smarty_tpl->tpl_vars['indice']->value;?>
</th>
                    <?php
$_smarty_tpl->tpl_vars['indice'] = $__foreach_indice_4_saved_local_item;
}
if ($__foreach_indice_4_saved_item) {
$_smarty_tpl->tpl_vars['indice'] = $__foreach_indice_4_saved_item;
}
?>
                <th style="width: 50px">Cantidad</th>
                <th>borrar</th>
            </tr> 

        </thead>
        <tbody id="tablaelementos">
        </tbody>

    </table>
    <input type="hidden" name="contenidotabla" id="contenidotabla">
</div>
<div class="col-lg-12  col-xs-12 form-inline" >
    <div id="divresultados">
        <div class='campo'>
            <label for='Descuento' >Descuento:</label><br/>
            <input type='number' class="form-control" id="facdescuento" name='descuento' step="any" value="0" onclick="actualizartotales()"/><br/>
        </div>
        <div class='campo'>
            <label for='tipoiva' >Tipo de IVA:</label><br/>
            <input type='number' class="form-control" id="factipoiva" name='tipoiva' step="any" value="21" onclick="actualizartotales()"/><br/>
        </div>
        <div class='campo'>
            <label for='precio' >Coste:</label><br/>
            <input type='number' class="form-control" id="faccoste" name='coste' step="any" value="0" ReadOnly /><br/>
        </div>
        <div class='campo'>
            <label for='baseimponible' >Base imponible:</label><br/>
            <input type='number' class="form-control" id="facbaseimponible" name='baseimponible' step="any" value="0" ReadOnly /><br/>
        </div>
        <div class='campo'>
            <label for='iva' >IVA:</label><br/>
            <input type='number' class="form-control" id="faciva" name='iva' step="any" value="0" ReadOnly /><br/>
        </div>
        <div class='campo'>
            <label for='total' >TOTAL:</label><br/>
            <input type='number' class="form-control" id="factotal" name='sumatotal' step="any" value="0" ReadOnly/><br/>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
    
    var arrayelementos = new Array();

    <?php
$_from = $_smarty_tpl->tpl_vars['elementoscompletos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_elemento_5_saved_item = isset($_smarty_tpl->tpl_vars['elemento']) ? $_smarty_tpl->tpl_vars['elemento'] : false;
$_smarty_tpl->tpl_vars['elemento'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['elemento']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['elemento']->value) {
$_smarty_tpl->tpl_vars['elemento']->_loop = true;
$__foreach_elemento_5_saved_local_item = $_smarty_tpl->tpl_vars['elemento'];
?>
    var arrayintermedia = new Array();
        <?php
$_from = $_smarty_tpl->tpl_vars['elemento']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_dato_6_saved_item = isset($_smarty_tpl->tpl_vars['dato']) ? $_smarty_tpl->tpl_vars['dato'] : false;
$_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['dato']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->value) {
$_smarty_tpl->tpl_vars['dato']->_loop = true;
$__foreach_dato_6_saved_local_item = $_smarty_tpl->tpl_vars['dato'];
?>
    arrayintermedia.push('<?php echo $_smarty_tpl->tpl_vars['dato']->value;?>
');
        <?php
$_smarty_tpl->tpl_vars['dato'] = $__foreach_dato_6_saved_local_item;
}
if ($__foreach_dato_6_saved_item) {
$_smarty_tpl->tpl_vars['dato'] = $__foreach_dato_6_saved_item;
}
?>
    arrayelementos.push(arrayintermedia);
    <?php
$_smarty_tpl->tpl_vars['elemento'] = $__foreach_elemento_5_saved_local_item;
}
if ($__foreach_elemento_5_saved_item) {
$_smarty_tpl->tpl_vars['elemento'] = $__foreach_elemento_5_saved_item;
}
?>
    <?php ob_start();
echo $_smarty_tpl->tpl_vars['filejs']->value;
$_tmp2=ob_get_clean();
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_tmp2, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php echo '</script'; ?>
><?php }
}
