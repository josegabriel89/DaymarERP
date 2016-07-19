<?php
/* Smarty version 3.1.29, created on 2016-06-20 23:02:29
  from "D:\Apuntes\Drive\DaymarERP\smarty\templates\creargasto.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576859e559fc86_70698083',
  'file_dependency' => 
  array (
    '828698892caa22c5d720583cf0811946b745b927' => 
    array (
      0 => 'D:\\Apuntes\\Drive\\DaymarERP\\smarty\\templates\\creargasto.tpl',
      1 => 1466456511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576859e559fc86_70698083 ($_smarty_tpl) {
?>
<div class='campo col-lg-6 col-xs-12'>
    <label for='cod' >Codigo:</label><br/>
    <input type='text' class="form-control" name='cod' maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['codigo']->value;?>
" required/><br/>
</div>
<div class='campo col-lg-6 col-xs-12'>
    <label for='nombre' >Nombre:</label><br/>
    <input type='text' class="form-control" name='nombre' maxlength="50"  required/><br/>
</div>
<div class='campo'>
    <label for='descripcion' >Descripcion:</label><br/>
    <textarea cols="100" rows="6" name="descripcion"></textarea><br>
</div>
<div class='campo col-lg-6 col-xs-12''>
    <label for='fecha' >Fecha:</label><br/>
<input type="date" class="form-control" name="fecha" value=<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
>
</div>
<div class='campo col-lg-6 col-xs-12'>
    <label for='precio' >Precio:</label><br/>
    <input type='number' class="form-control" name='precio' id='precio' step="any" value="0"/><br/>
</div>
<div class='campo col-lg-3 col-xs-12''>
    <label for='iva' >Iva:</label><br/>
    <input type='number' class="form-control" name='iva' id='iva' step="any" value="0"/><br/>
</div>
<div class='campo col-lg-3 col-xs-12''>
    <label for='precioiva' >Precio con iva:</label><br/>
    <input type='number' class="form-control" name='precioiva' id='precioiva' step="any" value="0"/><br/>
</div>
<div class='campo col-lg-3 col-xs-12''>
    <label for='poriva' >Porcentaje iva:</label><br/>
    <select name=poriva class="form-control" id='poriva'>
        <option value='21' selected>21%</option>
        <option value='10.5'>Vehiculos 1/2</option>
        <option value='10'>10%</option>
        <option value='4'>4%</option>
        <option value='0'>0%</option>
    </select>
</div>
<?php }
}
