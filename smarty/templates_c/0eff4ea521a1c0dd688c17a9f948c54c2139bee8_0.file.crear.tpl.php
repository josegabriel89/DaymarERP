<?php
/* Smarty version 3.1.29, created on 2016-03-06 22:21:46
  from "D:\Apuntes\Dropbox\Proyectos\daymar\smarty\templates\crear.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56dc9f6a624210_34957788',
  'file_dependency' => 
  array (
    '0eff4ea521a1c0dd688c17a9f948c54c2139bee8' => 
    array (
      0 => 'D:\\Apuntes\\Dropbox\\Proyectos\\daymar\\smarty\\templates\\crear.tpl',
      1 => 1457299224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56dc9f6a624210_34957788 ($_smarty_tpl) {
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
