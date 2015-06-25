<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-07 10:53:08
         compiled from "./smarty/templates/creargasto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190661441854e2f376c40b45-28091544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e38b0f67bf347dc73d19fe1ad56a5bba0a669b26' => 
    array (
      0 => './smarty/templates/creargasto.tpl',
      1 => 1428396395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190661441854e2f376c40b45-28091544',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54e2f376cbcca6_10765942',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e2f376cbcca6_10765942')) {function content_54e2f376cbcca6_10765942($_smarty_tpl) {?><div class='campo'>
    <label for='cod' >Codigo:</label><br/>
    <input type='text' name='cod' maxlength="50" /><br/>
    <!--                    Crear generador automatico de codigos, aun asi se puede 
    mostrar en pantalla pero con el label bloqueado-->
</div>
<div class='campo'>
    <label for='nombre' >Nombre:</label><br/>
    <input type='text' name='nombre' maxlength="50" /><br/>
</div>
<div class='campo'>
    <label for='descripcion' >Descripcion:</label><br/>
    <textarea cols="100" rows="6" name="descripcion"></textarea><br>
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
        <option value='10'>10%</option>
        <option value='4'>4%</option>
        <option value='0'>0%</option>
    </select>
</div>
<?php }} ?>
