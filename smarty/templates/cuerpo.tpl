<!DOCTYPE html>
<!-- Daymar Edificacion -->
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" media="screen" href="css/bootstrap.min.css">
        {*<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">*}
        <title>{$title}</title>
        <link href="css/cssdaymar.css" rel="stylesheet" type="text/css">
        {*<link href="cssdaymar.css" rel="stylesheet" type="text/css">*}
        <style>
        </style>
    </head>
    <body>  
        <div id="encabezado" class="text-center">
            <img src="include/logo.jpg" alt="logo" class="img-rounded img-responsive pull-left" id="logoempresa" height="80">
            <div id="reloj" style="text-align: right;margin-bottom: 0px">
                <script type="text/javascript" src="include/clock24.js"></script>
                <span class="clock24s" id="clock24_17367" style="color:#6393C3;">reloj</span>
                <script type="text/javascript">
                    var clock24_17367 = new clock24('17367', '60', '%HH:%nn:%ss %P', 'es');
                    clock24_17367.daylight('ES');
                    clock24_17367.refresh();
                </script>
            </div>
            <h1 style="margin-top: 0px">{$titlemenu}</h1>
        </div>
        
        {include file="barranavegacion.tpl"}
        
        <div id="contenido">
            <div class="container">
                {include file={$pagina}}          
            </div>
        </div>

        <div id="pie">
            <div style="position: absolute;bottom: 0px">
                <span class="text-success h4" >Usuario: </span>
                <span class="texto text-success h4">{$usuario}</span>
            </div>
            <form id="form_logout" action=logout.php method="post">
                <input class="btn btn-warning pull-right" type="submit" name="objeto" value="Salir">
            </form>
        </div>
        {*<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>*}

        <script type="text/javascript">
            {foreach from=$script item=scriptv}
                {$scriptv}
            {/foreach}
        </script>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>