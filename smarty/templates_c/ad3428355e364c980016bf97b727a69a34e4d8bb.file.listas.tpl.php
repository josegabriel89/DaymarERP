<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-05 20:04:23
         compiled from ".\smarty\templates\listas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1890756db22c1ba0301-92995981%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad3428355e364c980016bf97b727a69a34e4d8bb' => 
    array (
      0 => '.\\smarty\\templates\\listas.tpl',
      1 => 1457204660,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1890756db22c1ba0301-92995981',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56db22c21615d6_58860870',
  'variables' => 
  array (
    'tipolistap' => 0,
    'crearphp' => 0,
    'tipolistas' => 0,
    'indicee' => 0,
    'indice' => 0,
    'contenidoo' => 0,
    'paginaactual' => 0,
    'fila' => 0,
    'dato' => 0,
    'script' => 0,
    'scriptv' => 0,
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56db22c21615d6_58860870')) {function content_56db22c21615d6_58860870($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- Daymar Edificacion -->
<!-- Listas de datos -->
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Lista <?php echo $_smarty_tpl->tpl_vars['tipolistap']->value;?>
</title>
        <link href="cssdaymar.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="encabezado">
            <h1>Lista de <?php echo $_smarty_tpl->tpl_vars['tipolistap']->value;?>
</h1>
            <input type="button" onclick="location.href = 'home.php'" name="home" value="Ir al home">
            <input type="button" onclick="location.href = '<?php echo $_smarty_tpl->tpl_vars['crearphp']->value;?>
'" name="crear<?php echo $_smarty_tpl->tpl_vars['tipolistas']->value;?>
" value="Crear nuev<?php if ($_smarty_tpl->tpl_vars['tipolistas']->value=="factura") {?>a<?php } else { ?>o<?php }?> <?php echo $_smarty_tpl->tpl_vars['tipolistas']->value;?>
">
            <div id="reloj">
                <?php echo '<script'; ?>
 type="text/javascript" src="include/clock24.js"><?php echo '</script'; ?>
>
                <span class="clock24s" id="clock24_17367" style="color:#6393C3;">reloj</span>
                <?php echo '<script'; ?>
 type="text/javascript">
                    var clock24_17367 = new clock24('17367', '60', '%HH:%nn:%ss %P', 'es');
                    clock24_17367.daylight('ES');
                    clock24_17367.refresh();
                <?php echo '</script'; ?>
>
            </div>
        </div>

        <div id="contenido">
            <table border="1px">
                <tr>               
                    <?php  $_smarty_tpl->tpl_vars['indice'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['indice']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['indicee']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['indice']->key => $_smarty_tpl->tpl_vars['indice']->value) {
$_smarty_tpl->tpl_vars['indice']->_loop = true;
?>
                        <th><?php echo $_smarty_tpl->tpl_vars['indice']->value;?>
</th>
                    <?php } ?>
                </tr> 
                <?php  $_smarty_tpl->tpl_vars['fila'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fila']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contenidoo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fila']->key => $_smarty_tpl->tpl_vars['fila']->value) {
$_smarty_tpl->tpl_vars['fila']->_loop = true;
?>
                    <tr>
                    <form id="form_borrar" action="<?php echo $_smarty_tpl->tpl_vars['paginaactual']->value;?>
" method="post">
                        <?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fila']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value) {
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?>
                            <td><?php echo $_smarty_tpl->tpl_vars['dato']->value;?>
</td>
                        <?php } ?>
                        <td><input type="submit" name="borrar" value="X">
                            <input type="hidden" name="oculto" value="<?php echo $_smarty_tpl->tpl_vars['fila']->value[0];?>
"></td>
                        </tr>
                    </form>
                <?php } ?>
            </table>
        </div>
        <?php  $_smarty_tpl->tpl_vars['scriptv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['scriptv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['script']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['scriptv']->key => $_smarty_tpl->tpl_vars['scriptv']->value) {
$_smarty_tpl->tpl_vars['scriptv']->_loop = true;
?>
            <?php echo $_smarty_tpl->tpl_vars['scriptv']->value;?>

        <?php } ?>
        <div id="pie">
            <span class="texto">Usuario: </span>
            <span class="texto"><?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
</span>
            <form id="form_logout" action=logout.php method="post">
                <input type="submit" name="objeto" value="Salir">
            </form>
        </div>
    </body>
</html>
<?php }} ?>
