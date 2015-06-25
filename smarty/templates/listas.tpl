<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- Daymar Edificacion -->
<!-- Listas de datos -->
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Lista {$tipolistap}</title>
        <link href="cssdaymar.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="encabezado">
            <h1>Lista de {$tipolistap}</h1>
            <input type="button" onclick="location.href = 'home.php'" name="home" value="Ir al home">
            <input type="button" onclick="location.href = '{$crearphp}'" name="crear{$tipolistas}" value="Crear nuev{if $tipolistas=="factura"}a{else}o{/if} {$tipolistas}">
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
            <table border="1px">
                <tr>               
                    {foreach from=$indicee item=indice}
                        <td>{$indice}</td>
                    {/foreach}
                </tr> 
                {foreach from=$contenidoo item=fila}
                    <tr>
                    <form id="form_borrar" action="{$paginaactual}" method="post">
                        {foreach from=$fila item=dato}
                            <td>{$dato}</td>
                        {/foreach}
                        <td><input type="submit" name="borrar" value="X">
                            <input type="hidden" name="oculto" value="{$fila[0]}"></td>
                        </tr>
                    </form>
                {/foreach}
            </table>
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
