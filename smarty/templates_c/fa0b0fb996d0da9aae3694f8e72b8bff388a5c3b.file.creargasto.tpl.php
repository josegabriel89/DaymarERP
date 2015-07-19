<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-09 13:46:40
         compiled from ".\smarty\templates\creargasto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32534559e5f20dc4680-04088589%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa0b0fb996d0da9aae3694f8e72b8bff388a5c3b' => 
    array (
      0 => '.\\smarty\\templates\\creargasto.tpl',
      1 => 1428691439,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32534559e5f20dc4680-04088589',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'codigo' => 0,
    'date' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_559e5f20e82220_21134033',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559e5f20e82220_21134033')) {function content_559e5f20e82220_21134033($_smarty_tpl) {?><div class='campo'>
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
<?php }} ?>
