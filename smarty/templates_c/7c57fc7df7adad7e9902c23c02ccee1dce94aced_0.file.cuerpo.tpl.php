<?php
/* Smarty version 3.1.29, created on 2016-03-06 22:14:57
  from "D:\Apuntes\Dropbox\Proyectos\daymar\smarty\templates\cuerpo.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56dc9dd1a50a72_66827390',
  'file_dependency' => 
  array (
    '7c57fc7df7adad7e9902c23c02ccee1dce94aced' => 
    array (
      0 => 'D:\\Apuntes\\Dropbox\\Proyectos\\daymar\\smarty\\templates\\cuerpo.tpl',
      1 => 1457298896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:barranavegacion.tpl' => 1,
  ),
),false)) {
function content_56dc9dd1a50a72_66827390 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<!-- Daymar Edificacion -->
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <link href="cssdaymar.css" rel="stylesheet" type="text/css">
        <style>
        </style>
    </head>
    <body>  
        <div id="encabezado" class="text-center">
            <div id="reloj" style="text-align: right;margin-bottom: 0px">
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
            <h1 style="margin-top: 0px"><?php echo $_smarty_tpl->tpl_vars['titlemenu']->value;?>
</h1>
        </div>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:barranavegacion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <div id="contenido">
            <div class="container">
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['pagina']->value;
$_tmp1=ob_get_clean();
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_tmp1, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
          
            </div>
        </div>

        <?php
$_from = $_smarty_tpl->tpl_vars['script']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_scriptv_0_saved_item = isset($_smarty_tpl->tpl_vars['scriptv']) ? $_smarty_tpl->tpl_vars['scriptv'] : false;
$_smarty_tpl->tpl_vars['scriptv'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['scriptv']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['scriptv']->value) {
$_smarty_tpl->tpl_vars['scriptv']->_loop = true;
$__foreach_scriptv_0_saved_local_item = $_smarty_tpl->tpl_vars['scriptv'];
?>
            <?php echo $_smarty_tpl->tpl_vars['scriptv']->value;?>

        <?php
$_smarty_tpl->tpl_vars['scriptv'] = $__foreach_scriptv_0_saved_local_item;
}
if ($__foreach_scriptv_0_saved_item) {
$_smarty_tpl->tpl_vars['scriptv'] = $__foreach_scriptv_0_saved_item;
}
?>
        <div id="pie">
            <div style="position: absolute;bottom: 0px">
                <span class="text-success h4" >Usuario: </span>
                <span class="texto text-success h4"><?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
</span>
            </div>
            <form id="form_logout" action=logout.php method="post">
                <input class="btn btn-warning pull-right" type="submit" name="objeto" value="Salir">
            </form>
        </div>
        <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    </body>
</html><?php }
}
