<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- Daymar Edificacion -->
<!-- Menu Crear -->
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Crear{$tipoelementos}</title>
        <link href="cssdaymar.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="encabezado">
            <h1>Crear {$tipoelementos}</h1>
            <input type="button" onclick="location.href = 'home.php'" name="home" value="Ir al home">
            <input type="button" onclick="location.href = '{$listaphp}'" name="crear{$tipoelemento}" value="Lista de {$tipoelementos}">
            <div id="reloj">
                <script type="text/javascript" src="include/clock24.js"></script>
                <span class="clock24s" id="clock24_17367" style="color:#6393C3;">reloj</span>
                <script type="text/javascript">
                    var clock24_17367 = new clock24('17367', '60', '%HH:%nn:%ss %P', 'es');
                    clock24_17367.daylight('ES');
                    clock24_17367.refresh();
                </script>
            </div>
        </div>

        <div id="contenido">
            <form action='{$phpself}' method='post'>
                {include file={$file}}
                <div class='campo'>
                    <input type='submit' name='crear' value='Crear' />
                </div>
            </form>
        </div>
        {foreach from=$script item=scriptv}
            {$scriptv}
        {/foreach}
        <div id="pie">
            <span class="texto">Usuario: </span>
            <span class="texto">{$usuario}</span>
            <form id="form_logout" action=logout.php method="post">
                <input type="submit" name="objeto" value="Salir">
            </form>
        </div>
    </body>
</html>
