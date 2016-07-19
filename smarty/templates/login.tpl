<!DOCTYPE html>
<!-- Daymar Edificacion -->
<!-- Validacion de usuario: login.php -->
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" media="screen" href="css/bootstrap.min.css">
        {*<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">*}
        <title>Login: Daymar Edificación</title>
        <link href="css/cssdaymar.css" rel="stylesheet" type="text/css">
        {*<link href="cssdaymar.css" rel="stylesheet" type="text/css">*}
        <link href="cssdaymar.css" rel="stylesheet" type="text/css">
        <style>
        </style>
    </head>
    <body onload="error()">
        <div class='form-group container' id='login'>
            <form action='login.php' method='post'>
                <fieldset>
                    <legend>Login:</legend>
                    <div id="diverror"><span class="alert alert-danger" id="error">{$error}</span></div>
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
        <script type="text/javascript">
            function error() {
                var texterror = document.getElementById('error');
                var diverror = document.getElementById('diverror');
                if (texterror.textContent == "") {
                    diverror.style.display = "none";
                } else {
                    diverror.style.display = "inline";
                }
            }
        </script>
        {*<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>*}
            
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>