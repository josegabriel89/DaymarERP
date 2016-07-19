<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-05 19:17:54
         compiled from ".\smarty\templates\crear.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2367256db22d2488b33-80278025%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0eff4ea521a1c0dd688c17a9f948c54c2139bee8' => 
    array (
      0 => '.\\smarty\\templates\\crear.tpl',
      1 => 1424080082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2367256db22d2488b33-80278025',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tipoelementos' => 0,
    'listaphp' => 0,
    'tipoelemento' => 0,
    'phpself' => 0,
    'file' => 0,
    'script' => 0,
    'scriptv' => 0,
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56db22d273d127_84405955',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56db22d273d127_84405955')) {function content_56db22d273d127_84405955($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- Daymar Edificacion -->
<!-- Menu Crear -->
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Crear<?php echo $_smarty_tpl->tpl_vars['tipoelementos']->value;?>
</title>
        <link href="cssdaymar.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="encabezado">
            <h1>Crear <?php echo $_smarty_tpl->tpl_vars['tipoelementos']->value;?>
</h1>
            <input type="button" onclick="location.href = 'home.php'" name="home" value="Ir al home">
            <input type="button" onclick="location.href = '<?php echo $_smarty_tpl->tpl_vars['listaphp']->value;?>
'" name="crear<?php echo $_smarty_tpl->tpl_vars['tipoelemento']->value;?>
" value="Lista de <?php echo $_smarty_tpl->tpl_vars['tipoelementos']->value;?>
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
            <form action='<?php echo $_smarty_tpl->tpl_vars['phpself']->value;?>
' method='post'>
                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['file']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp1, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <div class='campo'>
                    <input type='submit' name='crear' value='Crear' />
                </div>
            </form>
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
