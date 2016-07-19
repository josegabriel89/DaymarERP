<?php
/* Smarty version 3.1.29, created on 2016-03-30 12:34:20
  from "D:\Dropbox\Proyectos\Daymar\smarty\templates\creargasto.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56fbabac725a23_23300382',
  'file_dependency' => 
  array (
    'a1e98840ea36ea2d030fd159786c736b4fbc8883' => 
    array (
      0 => 'D:\\Dropbox\\Proyectos\\Daymar\\smarty\\templates\\creargasto.tpl',
      1 => 1428691439,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56fbabac725a23_23300382 ($_smarty_tpl) {
?>
<div class='campo'>
    <label for='cod' >Codigo:</label><br/>
    <input type='text' name='cod' maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['codigo']->value;?>
" required/><br/>
</div>
<div class='campo'>
    <label for='nombre' >Nombre:</label><br/>
    <input type='text' name='nombre' maxlength="50"  required/><br/>
</div>
<div class='campo'>
    <label for='descripcion' >Descripcion:</label><br/>
    <textarea cols="100" rows="6" name="descripcion"></textarea><br>
</div>
<div class='campo'>
    <label for='fecha' >Fecha:</label><br/>
<input type="date" name="fecha" value=<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
>
</div>
<div class='campo'>
    <label for='precio' >Precio:</label><br/>
    <input type='number' name='precio' id='precio' step="any" value="0"/><br/>
</div>
<div class='campo'>
    <label for='iva' >Iva:</label><br/>
    <input type='number' name='iva' id='iva' step="any" value="0"/><br/>
</div>
<div class='campo'>
    <label for='precioiva' >Precio con iva:</label><br/>
    <input type='number' name='precioiva' id='precioiva' step="any" value="0"/><br/>
</div>
<div class='campo'>
    <label for='poriva' >Porcentaje iva:</label><br/>
    <select name=poriva id='poriva'>
        <option value='21' selected>21%</option>
        <option value='10.5'>Vehiculos 1/2</option>
        <option value='10'>10%</option>
        <option value='4'>4%</option>
        <option value='0'>0%</option>
    </select>
</div>
<?php }
}
