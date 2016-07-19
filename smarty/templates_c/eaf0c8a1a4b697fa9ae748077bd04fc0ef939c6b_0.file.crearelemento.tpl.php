<?php
/* Smarty version 3.1.29, created on 2016-06-20 23:02:39
  from "D:\Apuntes\Drive\DaymarERP\smarty\templates\crearelemento.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576859ef4eec35_69037017',
  'file_dependency' => 
  array (
    'eaf0c8a1a4b697fa9ae748077bd04fc0ef939c6b' => 
    array (
      0 => 'D:\\Apuntes\\Drive\\DaymarERP\\smarty\\templates\\crearelemento.tpl',
      1 => 1466456473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576859ef4eec35_69037017 ($_smarty_tpl) {
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
