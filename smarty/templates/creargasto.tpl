<div class='campo col-lg-6 col-xs-12'>
    <label for='cod' >Codigo:</label><br/>
    <input type='text' class="form-control" name='cod' maxlength="50" value="{$codigo}" required/><br/>
</div>
<div class='campo col-lg-6 col-xs-12'>
    <label for='nombre' >Nombre:</label><br/>
    <input type='text' class="form-control" name='nombre' maxlength="50"  required/><br/>
</div>
<div class='campo'>
    <label for='descripcion' >Descripcion:</label><br/>
    <textarea cols="100" rows="6" name="descripcion"></textarea><br>
</div>
<div class='campo col-lg-6 col-xs-12''>
    <label for='fecha' >Fecha:</label><br/>
<input type="date" class="form-control" name="fecha" value={$date}>
</div>
<div class='campo col-lg-6 col-xs-12'>
    <label for='precio' >Precio:</label><br/>
    <input type='number' class="form-control" name='precio' id='precio' step="any" value="0"/><br/>
</div>
<div class='campo col-lg-3 col-xs-12''>
    <label for='iva' >Iva:</label><br/>
    <input type='number' class="form-control" name='iva' id='iva' step="any" value="0"/><br/>
</div>
<div class='campo col-lg-3 col-xs-12''>
    <label for='precioiva' >Precio con iva:</label><br/>
    <input type='number' class="form-control" name='precioiva' id='precioiva' step="any" value="0"/><br/>
</div>
<div class='campo col-lg-3 col-xs-12''>
    <label for='poriva' >Porcentaje iva:</label><br/>
    <select name=poriva class="form-control" id='poriva'>
        <option value='21' selected>21%</option>
        <option value='10.5'>Vehiculos 1/2</option>
        <option value='10'>10%</option>
        <option value='4'>4%</option>
        <option value='0'>0%</option>
    </select>
</div>
