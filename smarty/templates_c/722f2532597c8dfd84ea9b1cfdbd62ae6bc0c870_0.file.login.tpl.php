<?php
/* Smarty version 3.1.29, created on 2016-03-06 21:58:27
  from "D:\Apuntes\Dropbox\Proyectos\daymar\smarty\templates\login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56dc99f314e3d6_68579437',
  'file_dependency' => 
  array (
    '722f2532597c8dfd84ea9b1cfdbd62ae6bc0c870' => 
    array (
      0 => 'D:\\Apuntes\\Dropbox\\Proyectos\\daymar\\smarty\\templates\\login.tpl',
      1 => 1457297905,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56dc99f314e3d6_68579437 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<!-- Daymar Edificacion -->
<!-- Validacion de usuario: login.php -->
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
        <title>Login: Daymar Edificación</title>
        <link href="cssdaymar.css" rel="stylesheet" type="text/css">
        <style>
        </style>
    </head>
    <body onload="error()">
        <div class='form-group container' id='login'>
            <form action='login.php' method='post'>
                <fieldset>
                    <legend>Login:</legend>
                    <div id="diverror"><span class="alert alert-danger" id="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span></div>
                    <div class='form-group campo'>
                        <label for='usuario' >Usuario:</label><br/>
                        <input type='text' class="form-control input-lg" name='usuario' id='usuario' maxlength="50" placeholder="Introduzca usuario" required/><br/>
                    </div>
                    <div class='form-group campo'>
                        <label for='password' >Contraseña:</label><br/>
                        <input type='password' class="form-control input-lg" name='password' id='password' maxlength="50"  placeholder="Introduzca contraseña" required/><br/>
                    </div>

                    <div class='form-group campo'>
                        <input type='submit' class="btn btn-default" name='enviar' value='Enviar' />
                    </div>
                </fieldset>
            </form>
        </div>
        <?php echo '<script'; ?>
 type="text/javascript">
            function error() {
                var texterror = document.getElementById('error');
                var diverror = document.getElementById('diverror');
                if (texterror.textContent == "") {
                    diverror.style.display = "none";
                } else {
                    diverror.style.display = "inline";
                }
            }
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    </body>
</html><?php }
}
