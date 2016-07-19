<?php
/* Smarty version 3.1.29, created on 2016-05-16 13:06:18
  from "D:\Drive\DaymarERP\smarty\templates\crear.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5739a9aa8fd186_10164364',
  'file_dependency' => 
  array (
    'fad5f8c8efe9191cd49af7622c8ea8503758e85b' => 
    array (
      0 => 'D:\\Drive\\DaymarERP\\smarty\\templates\\crear.tpl',
      1 => 1460115431,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5739a9aa8fd186_10164364 ($_smarty_tpl) {
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
