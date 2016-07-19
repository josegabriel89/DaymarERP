<?php
/* Smarty version 3.1.29, created on 2016-04-03 15:43:26
  from "D:\Apuntes\Dropbox\Proyectos\Daymar\smarty\templates\crear.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57011dfed32260_10972465',
  'file_dependency' => 
  array (
    'b4480a2b1a8d681ddf9d0b7966145f29d5167d0a' => 
    array (
      0 => 'D:\\Apuntes\\Dropbox\\Proyectos\\Daymar\\smarty\\templates\\crear.tpl',
      1 => 1457299224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57011dfed32260_10972465 ($_smarty_tpl) {
?>
<input type="button" class="btn btn-default" onclick="location.href = '<?php echo $_smarty_tpl->tpl_vars['listaphp']->value;?>
'" name="crear<?php echo $_smarty_tpl->tpl_vars['tipoelemento']->value;?>
" value="Lista de <?php echo $_smarty_tpl->tpl_vars['tipoelementos']->value;?>
">
<form action='<?php echo $_smarty_tpl->tpl_vars['phpself']->value;?>
' method='post'>
    <?php ob_start();
echo $_smarty_tpl->tpl_vars['file']->value;
$_tmp1=ob_get_clean();
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_tmp1, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    <div class='campo'>
        <input type='submit' name='crear' value='Crear' />
    </div>
</form>
<?php }
}
