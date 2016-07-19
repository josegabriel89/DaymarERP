<div class='campo {if ($tipoelementos==clientes)}col-lg-6 col-xs-12{/if}'>
    <label for='dni' >DNI:</label><br/>
    <input type='text' class="form-control" name='dni' maxlength="50" value="{$valordni}"/><br/>
</div>
<div class='campo {if ($tipoelementos==clientes)}col-lg-6 col-xs-12{/if}'>
    <label for='nombre' >Nombre:</label><br/>
    <input type='text' class="form-control" name='nombre' maxlength="50" value="{$valornombre}"/><br/>
</div>
<div class='campo  {if ($tipoelementos==clientes)}col-lg-6 col-xs-12{/if}'>
    <label for='apellido1' >1er Apellido:</label><br/>
    <input type='text' class="form-control" name='apellido1' maxlength="50" value="{$valorapellido1}"/><br/>
</div>
<div class='campo  {if ($tipoelementos==clientes)}col-lg-6 col-xs-12{/if}'>
    <label for='apellido2' >2º Apellido:</label><br/>
    <input type='text' class="form-control" name='apellido2' maxlength="50" value="{$valorapellido2}"/><br/>
</div>
<div class='campo  {if ($tipoelementos==clientes)}col-lg-12 col-xs-12{/if}'>
    <label for='direccion' >Direccion:</label><br/>
    <input type='text' class="form-control" name='direccion' maxlength="50" value="{$valordireccion}"/><br/>
</div>
<div class='campo  {if ($tipoelementos==clientes)}col-lg-6 col-xs-12{/if}'>
    <label for='localidad' >Localidad:</label><br/>
    <input type='text' class="form-control" name='localidad' maxlength="50" value="{$valorlocalidad}"/><br/>
</div>
<div class='campo  {if ($tipoelementos==clientes)}col-lg-6 col-xs-12{/if}'>
    <label for='provincia' >Provincia:</label><br/>
    <input type='text' class="form-control" name='provincia' maxlength="50" value="{$valorprovincia}"/><br/>
</div>
{for $valor=1 to $num}
    <div class='campo  {if ($tipoelementos==clientes)}col-lg-3 col-xs-12{/if}'>
        <label for='telefono' >{if ($valor==1)}Telefonos:{/if} </label><br/>
        <input type='text' class="form-control" name='telefono{$valor}' maxlength="50" value="{$valortelefonoarray[$valor-1]}"/><br/>
    </div>
{/for}
<div class='campo'>
    <input type='submit' name='mas' value='+'/>
    {if ($num!=1)}
        <input type='submit' name='menos' value='-'/>
    {/if}
</div>