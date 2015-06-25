<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- Daymar Edificacion -->
<!-- Menu principal: home.php -->
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Home: Daymar Edificación</title>
        <link href="cssdaymar.css" rel="stylesheet" type="text/css">
    </head>
    <body>   
        <div id="encabezado">
            <h1>Menu Principal</h1>
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
            <div id="contenidomenu">
                <h2>Contabilidad:</h2>
                <input type="button" onclick="location.href = 'contabilidad.php'" name="modificarcuenta" value="Contabilidad">
            </div>
            <div id="contenidomenu">
                <h2>Facturas:</h2>
                <input type="button" onclick="location.href = 'listafacturas.php'" name="modificarcuenta" value="Lista de Facturas">
                <input type="button" onclick="location.href = 'crearfactura.php'" name="modificarcuenta" value="Crear factura">
            </div>
            <div id="contenidomenu">
                <h2>Clientes:</h2>
                <input type="button" onclick="location.href = 'listaclientes.php'" name="modificarcuenta" value="Lista de clientes">
                <input type="button" onclick="location.href = 'crearcliente.php'" name="modificarcuenta" value="Crear cliente">
            </div>
            <div id="contenidomenu">
                <h2>Gastos:</h2>
                <input type="button" onclick="location.href = 'listagastos.php'" name="modificarcuenta" value="Lista de gastos">
                <input type="button" onclick="location.href = 'creargasto.php'" name="modificarcuenta" value="Crear gasto">
            </div>
            <div id="contenidomenu">
                <h2>Elementos</h2>
                <input type="button" onclick="location.href = 'listaelementos.php'" name="modificarcuenta" value="Lista de elementos">
                <input type="button" onclick="location.href = 'crearelemento.php'" name="modificarcuenta" value="Crear elemento">
            </div>
        </div>

        <div id="pie">
            <span class="texto">Usuario: </span>
            <span class="texto">{$usuario}</span>
            <form id="form_logout" action=logout.php method="post">
                <input type="submit" name="objeto" value="Salir">
            </form>
        </div>
    </body>
</html>