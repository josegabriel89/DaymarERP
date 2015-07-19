<div class='campo'>
    <label for='dni' >DNI:</label><br/>
    <input type='text' name='dni' maxlength="50"/><br/>
</div>
<div class='campo'>
    <label for='nombre' >Nombre:</label><br/>
    <input type='text' name='nombre' maxlength="50" /><br/>
</div>
<div class='campo'>
    <label for='apellido1' >1er Apellido:</label><br/>
    <input type='text' name='apellido1' maxlength="50" /><br/>
</div>
<div class='campo'>
    <label for='apellido2' >2º Apellido:</label><br/>
    <input type='text' name='apellido2' maxlength="50" /><br/>
</div>
<div class='campo'>
    <label for='direccion' >Direccion:</label><br/>
    <input type='text' name='direccion' maxlength="50" /><br/>
</div>
<div class='campo'>
    <label for='localidad' >Localidad:</label><br/>
    <input type='text' name='localidad' maxlength="50" /><br/>
</div>
<div class='campo'>
    <label for='provincia' >Provincia:</label><br/>
    <input type='text' name='provincia' maxlength="50" /><br/>
</div>
<div class='campo'>
    <label for='telefono' >Telefonos:</label><br/>
    {for $valor=1 to $num}
        <input type='text' name='telefono{$valor}' maxlength="50" /><br/>
    {/for}
    <input type='submit' name='mas' value='+'/>
    {if ($num!=1)}
        <input type='submit' name='menos' value='-'/>
    {/if}
</div>