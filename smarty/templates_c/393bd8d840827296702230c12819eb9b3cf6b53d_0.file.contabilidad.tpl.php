<?php
/* Smarty version 3.1.29, created on 2016-06-21 07:46:11
  from "D:\Apuntes\Drive\DaymarERP\smarty\templates\contabilidad.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5768d4a3b37689_20752758',
  'file_dependency' => 
  array (
    '393bd8d840827296702230c12819eb9b3cf6b53d' => 
    array (
      0 => 'D:\\Apuntes\\Drive\\DaymarERP\\smarty\\templates\\contabilidad.tpl',
      1 => 1466487969,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5768d4a3b37689_20752758 ($_smarty_tpl) {
?>
<form action='<?php echo $_smarty_tpl->tpl_vars['phpself']->value;?>
' method='post'>
    <div class="col-lg-12 col-xs-12 container">
        <div class="col-lg-4 col-sm-6  col-xs-12" style="padding-top: 25px">
            <input class="btn btn-info form-control" type="submit" name="fechaprefijada" value="Este mes">
            <input class="btn btn-info form-control" type="submit" name="fechaprefijada" value="Mes anterior">
            <input class="btn btn-info form-control" type="submit" name="fechaprefijada" value="Ultimos 3 meses">
        </div>
        <div class="col-lg-4  col-sm-6  col-xs-12" style="padding-top: 25px">
            <input class="btn btn-info form-control" type="submit" name="fechaprefijada" value="Este Año">
            <input class="btn btn-info form-control" type="submit" name="fechaprefijada" value="Año anterior">
            <input class="btn btn-info form-control" type="submit" name="fechaprefijada" value="Ultimos 3 Años">
        </div>

        <div class="col-lg-4  col-sm-6 col-xs-12" id="fechas">
            <div class='campo col-xs-6 col-sm-6 col-md-12'>
                <label for='fecha' >Desde:</label><br/>
                <div>
                    <div class="col-lg-4">
                        <input type='text' class="form-control col-xs-4" name='fechadesdedia' id="fechadesdedia" value='<?php echo $_smarty_tpl->tpl_vars['fechadesdedia']->value;?>
' placeholder="dia" />
                    </div>
                    <div class="col-lg-4">
                        <input type='text' class="form-control col-xs-4" name='fechasdesdemes'  id="fechasdesdemes" value='<?php echo $_smarty_tpl->tpl_vars['fechadesdemes']->value;?>
' placeholder="mes"/>
                    </div>
                    <div class="col-lg-4">
                        <input type='text' class="form-control col-xs-4" name='fechadesdeanno'  id="fechadesdeanno" value='<?php echo $_smarty_tpl->tpl_vars['fechadesdeanno']->value;?>
' placeholder="año"/>
                    </div>
                </div>
            </div>
            <div class='campo col-xs-6 col-sm-6 col-md-12'>
                <label for='fecha' >Hasta:</label><br/>
                <div>
                    <div class="col-lg-4">
                        <input type='text' class="form-control col-xs-4" name='fechahastadia' id="fechahastadia" value='<?php echo $_smarty_tpl->tpl_vars['fechahastadia']->value;?>
' placeholder="dia" />
                    </div>
                    <div class="col-lg-4">
                        <input type='text' class="form-control col-xs-4" name='fechashastames'  id="fechashastames" value='<?php echo $_smarty_tpl->tpl_vars['fechahastames']->value;?>
' placeholder="mes"/>
                    </div>
                    <div class="col-lg-4">
                        <input type='text' class="form-control col-xs-4" name='fechahastaanno' id="fechahastaanno"  value='<?php echo $_smarty_tpl->tpl_vars['fechahastaanno']->value;?>
'placeholder="año"/>
                    </div>
                </div>
            </div> 
            <div class='campo'>
                <input class="btn btn-default form-control" type="submit" name="comprobar" value="Comprobar fechas" style="margin-top: 20px">
            </div>
        </div>

        <div id="haberydebe">
            <div class="col-lg-6 col-xs-6 container">
                <div class='campo'>
                    <label for='haber' >Haber:</label><br/>
                    <input type='text' class="form-control" name='haber' maxlength="50" disabled="true" value="<?php echo $_smarty_tpl->tpl_vars['haber']->value;?>
"/><br/>
                </div>

            </div>
            <div class="col-lg-6 col-xs-6 container">
                <div class='campo'>
                    <label for='debe' >Debe:</label><br/>
                    <input type='text' class="form-control" name='debe' maxlength="50" disabled="true" value="<?php echo $_smarty_tpl->tpl_vars['debe']->value;?>
"/><br/>
                </div>

            </div>
        </div>

        <?php if (count($_smarty_tpl->tpl_vars['contenidofacturas']->value) != 0 || count($_smarty_tpl->tpl_vars['contenidogastos']->value) != 0) {?>
            <div class="col-lg-12 col-xs-12 container" style="margin-top: 20px">
                <div class="col-lg-6 col-sm-6  col-xs-12">
                    <table class="table table-hover table-striped table-responsive" id="tablafacturas">
                        <tr>               
                            <th colspan="2">Facturas:</th>
                        </tr> 
                        <?php
$_from = $_smarty_tpl->tpl_vars['contenidofacturas']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_linea_0_saved_item = isset($_smarty_tpl->tpl_vars['linea']) ? $_smarty_tpl->tpl_vars['linea'] : false;
$_smarty_tpl->tpl_vars['linea'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['linea']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['linea']->value) {
$_smarty_tpl->tpl_vars['linea']->_loop = true;
$__foreach_linea_0_saved_local_item = $_smarty_tpl->tpl_vars['linea'];
?>
                            <tr>
                                <?php
$_from = $_smarty_tpl->tpl_vars['linea']->value;
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
                            </tr>
                        <?php
$_smarty_tpl->tpl_vars['linea'] = $__foreach_linea_0_saved_local_item;
}
if ($__foreach_linea_0_saved_item) {
$_smarty_tpl->tpl_vars['linea'] = $__foreach_linea_0_saved_item;
}
?>
                    </table>
                </div>
                <div class="col-lg-6  col-sm-6 col-xs-12">
                    <table class="table table-hover table-striped table-responsive" id="tablagastos">
                        <tr>               
                            <th colspan="2">Gastos:</th>
                        </tr> 
                        <?php
$_from = $_smarty_tpl->tpl_vars['contenidogastos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_linea_2_saved_item = isset($_smarty_tpl->tpl_vars['linea']) ? $_smarty_tpl->tpl_vars['linea'] : false;
$_smarty_tpl->tpl_vars['linea'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['linea']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['linea']->value) {
$_smarty_tpl->tpl_vars['linea']->_loop = true;
$__foreach_linea_2_saved_local_item = $_smarty_tpl->tpl_vars['linea'];
?>
                            <tr>
                                <?php
$_from = $_smarty_tpl->tpl_vars['linea']->value;
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
                            </tr>
                        <?php
$_smarty_tpl->tpl_vars['linea'] = $__foreach_linea_2_saved_local_item;
}
if ($__foreach_linea_2_saved_item) {
$_smarty_tpl->tpl_vars['linea'] = $__foreach_linea_2_saved_item;
}
?>
                    </table>
                </div>
            </div>
        <?php }?>
    </div>
</form><?php }
}
