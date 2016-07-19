<div class="col-lg-7 col-xs-12">
    <div class='campo'>
        <label for='cod' >Codigo:</label><br/>
        <input type='text' class="form-control" name='codfactura' maxlength="50" value="{$Codigofactura}" ReadOnly /><br/>
    </div>
    {*<div class='campo'>
    <label for='fecha' >Fecha:</label><br/>
    <input type='date' class="form-control" name='fecha' id="fechafactura" /><br/>
    </div>*}

    <div id="facturanuevocliente">
        <label for='cliente' >Cliente:</label><br/>
        {include file={$file2}}
    </div>
</div>
<span id="a"></span>
<div class="col-lg-5 col-xs-12" id="facturaselmentosaincluir">
    <input type="button" class="btn btn-default" onclick="mostrarlistaclientes()" name="elegircliente" value="Elegir Cliente Existente">
    <input type="button" class="btn btn-default" onclick="mostrarlistaelementos()" name="añadirelemento" value="Lista de Elementos">
    <div id="facturatablaclientes">
        <h3 class="col-xs-12 col-lg-12">Clientes</h3>
        <br>

        {*<form id="form_clientes" action="{$phpself}" method="post">*}
        {foreach  from=$clientes item=fila}
            {foreach from=$fila item=dato}
                <input type='submit' class="btn btn-default" name='seleccionarcliente' value='{$dato}' />
                {*<a class="btn btn-default col-xs-12 col-lg-6" onclick="añadircliente()">{$dato}</a>*}
            {/foreach}
        {/foreach}
        {*</form>*}
    </div>
    <div id="facturatablaelementos">
        <h3 class="col-xs-12 col-lg-12">Elementos</h3>
        {foreach from=$elementos item=fila}
            {foreach from=$fila item=dato}
                <a class="btn btn-default col-xs-12 col-lg-6" onclick="addelemento('{$dato}')">{$dato}</a>
            {/foreach}
        {/foreach}
    </div>
</div>
<div class="col-lg-12  col-xs-12">

    <table class="table table-hover table-striped table-responsive" id="tablaelementosprincipal">
        <thead>
            <tr>               
                {foreach from=$indiceelementos item=indice}
                    <th>{$indice}</th>
                    {/foreach}
                <th style="width: 50px">Cantidad</th>
                <th>borrar</th>
            </tr> 

        </thead>
        <tbody id="tablaelementos">
        </tbody>

    </table>
    <input type="hidden" name="contenidotabla" id="contenidotabla">
</div>
<div class="col-lg-12  col-xs-12 form-inline" >
    <div id="divresultados">
        <div class='campo'>
            <label for='Descuento' >Descuento:</label><br/>
            <input type='number' class="form-control" id="facdescuento" name='descuento' step="any" value="0" onclick="actualizartotales()"/><br/>
        </div>
        <div class='campo'>
            <label for='tipoiva' >Tipo de IVA:</label><br/>
            <input type='number' class="form-control" id="factipoiva" name='tipoiva' step="any" value="21" onclick="actualizartotales()"/><br/>
        </div>
        <div class='campo'>
            <label for='precio' >Coste:</label><br/>
            <input type='number' class="form-control" id="faccoste" name='coste' step="any" value="0" ReadOnly /><br/>
        </div>
        <div class='campo'>
            <label for='baseimponible' >Base imponible:</label><br/>
            <input type='number' class="form-control" id="facbaseimponible" name='baseimponible' step="any" value="0" ReadOnly /><br/>
        </div>
        <div class='campo'>
            <label for='iva' >IVA:</label><br/>
            <input type='number' class="form-control" id="faciva" name='iva' step="any" value="0" ReadOnly /><br/>
        </div>
        <div class='campo'>
            <label for='total' >TOTAL:</label><br/>
            <input type='number' class="form-control" id="factotal" name='sumatotal' step="any" value="0" ReadOnly/><br/>
        </div>
    </div>
</div>

<script type="text/javascript">
    {* var arrayelementos = {$elementoscompletos};*}
    var arrayelementos = new Array();

    {foreach from=$elementoscompletos item=elemento}
    var arrayintermedia = new Array();
        {foreach from=$elemento item=dato}
    arrayintermedia.push('{$dato}');
        {/foreach}
    arrayelementos.push(arrayintermedia);
    {/foreach}
    {include file={$filejs}}
</script>