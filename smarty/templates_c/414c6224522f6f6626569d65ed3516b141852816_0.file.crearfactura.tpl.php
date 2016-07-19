<?php
/* Smarty version 3.1.29, created on 2016-04-08 13:38:52
  from "D:\Dropbox\Proyectos\Daymar\smarty\templates\crearfactura.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5707984cc8b592_66997770',
  'file_dependency' => 
  array (
    '414c6224522f6f6626569d65ed3516b141852816' => 
    array (
      0 => 'D:\\Dropbox\\Proyectos\\Daymar\\smarty\\templates\\crearfactura.tpl',
      1 => 1460115527,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5707984cc8b592_66997770 ($_smarty_tpl) {
?>
<div class="col-lg-7 col-xs-12">
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

    <div id="facturanuevocliente">
        <form class="form-horizontal" role="form">
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['file2']->value;
$_tmp1=ob_get_clean();
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_tmp1, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

        </form>
    </div>
</div>

<div class="col-lg-5 col-xs-12" id="facturaselmentosaincluir">
    
        <div id="facturatablaclientes" >
            
                    <h3 class="col-xs-12 col-lg-12">Clientes</h3>
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
                             <a class="btn btn-default col-xs-12 col-lg-6"><?php echo $_smarty_tpl->tpl_vars['dato']->value;?>
</a>
                        
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
                            <span class="btn btn-default col-xs-12 col-lg-6"><?php echo $_smarty_tpl->tpl_vars['dato']->value;?>
</span>
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
    <div class="pull-right">
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
    </div>
        </div>
</div>
<?php }
}
