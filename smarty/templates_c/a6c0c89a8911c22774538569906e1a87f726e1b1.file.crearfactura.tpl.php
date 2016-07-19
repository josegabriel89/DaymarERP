<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-06 18:20:08
         compiled from ".\smarty\templates\crearfactura.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1042356db253edcb495-44896404%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6c0c89a8911c22774538569906e1a87f726e1b1' => 
    array (
      0 => '.\\smarty\\templates\\crearfactura.tpl',
      1 => 1457284803,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1042356db253edcb495-44896404',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56db253ee11fe3_87958278',
  'variables' => 
  array (
    'file2' => 0,
    'clientes' => 0,
    'fila' => 0,
    'dato' => 0,
    'elementos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56db253ee11fe3_87958278')) {function content_56db253ee11fe3_87958278($_smarty_tpl) {?><div class='campo'>
    <label for='cod' >Codigo:</label><br/>
    <input type='text' name='cod' maxlength="50" /><br/>
    <!--                    Crear generador automatico de codigos, aun asi se puede 
    mostrar en pantalla pero con el label bloqueado-->
</div>
<div class='campo'>
    <label for='fecha' >Fecha:</label><br/>
    <input type='date' name='fecha' id="fechafactura"/><br/>
</div>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['file2']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp1, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <table border="1px">
        <tr>       
            <th>Clientes</th>
        </tr> 
        <?php  $_smarty_tpl->tpl_vars['fila'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fila']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['clientes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fila']->key => $_smarty_tpl->tpl_vars['fila']->value) {
$_smarty_tpl->tpl_vars['fila']->_loop = true;
?>
            <tr>
                <?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fila']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value) {
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?>
                    <td><?php echo $_smarty_tpl->tpl_vars['dato']->value;?>
</td>
                <?php } ?>
                <td><input type="submit" name="elegir" value="X">
                    <input type="hidden" name="oculto" value="<?php echo $_smarty_tpl->tpl_vars['fila']->value[0];?>
"></td>
            </tr>
        <?php } ?>
    </table>
    <table border="1px">
        <tr>       
            <th>Elementos</th>
        </tr> 
        <?php  $_smarty_tpl->tpl_vars['fila'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fila']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['elementos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fila']->key => $_smarty_tpl->tpl_vars['fila']->value) {
$_smarty_tpl->tpl_vars['fila']->_loop = true;
?>
            <tr>
                <?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fila']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value) {
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?>
                    <td><?php echo $_smarty_tpl->tpl_vars['dato']->value;?>
</td>
                <?php } ?>
                <td><input type="submit" name="elegir" value="X">
                    <input type="hidden" name="oculto" value="<?php echo $_smarty_tpl->tpl_vars['fila']->value[0];?>
"></td>
            </tr>
        <?php } ?>
    </table>
<div class='campo'>
    <label for='precio' >Descuento:</label><br/>
    <input type='number' name='descuento' step="any" value="0"/><br/>
</div><?php }} ?>
