<?php
/* Smarty version 3.1.29, created on 2016-06-18 16:45:55
  from "D:\Apuntes\Drive\DaymarERP\smarty\templates\crear.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57655ea394c460_36943716',
  'file_dependency' => 
  array (
    'cbe9ac97e1386889b0af6f7e8db538366dfdce3a' => 
    array (
      0 => 'D:\\Apuntes\\Drive\\DaymarERP\\smarty\\templates\\crear.tpl',
      1 => 1466194507,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57655ea394c460_36943716 ($_smarty_tpl) {
?>
<div class='campo'>
<input type="button" class="btn btn-default" onclick="location.href = '<?php echo $_smarty_tpl->tpl_vars['listaphp']->value;?>
'" name="crear<?php echo $_smarty_tpl->tpl_vars['tipoelemento']->value;?>
" value="Lista de <?php echo $_smarty_tpl->tpl_vars['tipoelementos']->value;?>
">
</div>
<form action='<?php echo $_smarty_tpl->tpl_vars['phpself']->value;?>
' method='post'>
    <div class='col-lg-12 col-xs-12'>
    <?php ob_start();
echo $_smarty_tpl->tpl_vars['file']->value;
$_tmp1=ob_get_clean();
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_tmp1, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    </div>
    <div class='campo'>
        <input type='submit' class="btn btn-default" name='crear' value='Crear' />
    </div>
</form>
<?php }
}
