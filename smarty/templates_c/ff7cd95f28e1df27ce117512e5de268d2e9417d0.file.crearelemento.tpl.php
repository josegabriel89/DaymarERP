<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-26 12:11:34
         compiled from "./smarty/templates/crearelemento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26226043454eeff66d6bb09-92825255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff7cd95f28e1df27ce117512e5de268d2e9417d0' => 
    array (
      0 => './smarty/templates/crearelemento.tpl',
      1 => 1424158258,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26226043454eeff66d6bb09-92825255',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54eeff66ebbf22_32017018',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54eeff66ebbf22_32017018')) {function content_54eeff66ebbf22_32017018($_smarty_tpl) {?><div class='campo'>
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
    <label for='precio' >Precio:</label><br/>
    <input type='number' name='precio' step="any" value="0"/><br/>
</div>
<div class='campo'>
    <label for='coste' >Coste:</label><br/>
    <input type='number' name='coste' step="any" value="0"/><br/>
</div><?php }} ?>
