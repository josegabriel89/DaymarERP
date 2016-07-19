<?php
/* Smarty version 3.1.29, created on 2016-06-21 08:13:44
  from "D:\Drive\DaymarERP\smarty\templates\crearelemento.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5768db18923aa0_87135667',
  'file_dependency' => 
  array (
    '39d26743bc57122c300e30a2e4d4da7eebe0513f' => 
    array (
      0 => 'D:\\Drive\\DaymarERP\\smarty\\templates\\crearelemento.tpl',
      1 => 1466456473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5768db18923aa0_87135667 ($_smarty_tpl) {
?>
<div class='campo col-lg-6 col-xs-12'>
    <label for='cod' >Codigo:</label><br/>
    <input type='text' class="form-control" name='cod' maxlength="50" /><br/>
    <!--                    Crear generador automatico de codigos, aun asi se puede 
    mostrar en pantalla pero con el label bloqueado-->
</div>
<div class='campo col-lg-6 col-xs-12'>
    <label for='nombre' >Nombre:</label><br/>
    <input type='text' class="form-control" name='nombre' maxlength="50"  required/><br/>
</div>
<div class='campo col-lg-6 col-xs-12'>
    <label for='precio' >Precio:</label><br/>
    <input type='number' class="form-control" name='precio' step="any" value="0" required/><br/>
</div>
<div class='campo col-lg-6 col-xs-12'>
    <label for='coste' >Coste:</label><br/>
    <input type='number' class="form-control" name='coste' step="any" value="0"/><br/>
</div><?php }
}
