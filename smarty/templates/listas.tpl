<input type="button" class="btn btn-default" onclick="location.href = '{$crearphp}'" name="crear{$tipolistas}" value="Crear nuev{if $tipolistas=="factura"}a{else}o{/if} {$tipolistas}">

<table class="table table-hover table-striped table-responsive">
    <tr>               
        {foreach from=$indicee item=indice}
            <th>{$indice}</th>
            {/foreach}
    </tr> 
    {foreach from=$contenidoo item=fila}
        <tr>
        <form id="form_borrar" action="{$paginaactual}" method="post">
            {foreach from=$fila item=dato}
                <td>{$dato}</td>
            {/foreach}
            <td>
                {if ($tipolistap!=facturas)}
                <input type="submit" class="form-control" name="borrar" value="X">
                {else}
                <input type="submit" class="form-control" name="imprimir" value="imprimir">
                {/if}
                <input type="hidden" name="oculto" value="{$fila[0]}">
            </td>
            </tr>
        </form>
    {/foreach}
</table>