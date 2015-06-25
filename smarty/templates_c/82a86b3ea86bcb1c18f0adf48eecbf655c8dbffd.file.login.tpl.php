<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-17 08:53:07
         compiled from "./smarty/templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190782763454e2f363609458-22499175%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82a86b3ea86bcb1c18f0adf48eecbf655c8dbffd' => 
    array (
      0 => './smarty/templates/login.tpl',
      1 => 1422812070,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190782763454e2f363609458-22499175',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54e2f3636bd9a3_04776400',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e2f3636bd9a3_04776400')) {function content_54e2f3636bd9a3_04776400($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- Daymar Edificacion -->
<!-- Validacion de usuario: login.php -->
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Login: Daymar Edificación</title>
  <link href="cssdaymar.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id='login'>
    <form action='login.php' method='post'>
    <fieldset>
        <legend>Login</legend>
        <div><span class='error'><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span></div>
        <div class='campo'>
            <label for='usuario' >Usuario:</label><br/>
            <input type='text' name='usuario' id='usuario' maxlength="50" /><br/>
        </div>
        <div class='campo'>
            <label for='password' >Contraseña:</label><br/>
            <input type='password' name='password' id='password' maxlength="50" /><br/>
        </div>

        <div class='campo'>
            <input type='submit' name='enviar' value='Enviar' />
        </div>
    </fieldset>
    </form>
    </div>
</body>
</html><?php }} ?>
