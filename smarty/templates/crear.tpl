<div class='campo'>
<input type="button" class="btn btn-default" onclick="location.href = '{$listaphp}'" name="crear{$tipoelemento}" value="Lista de {$tipoelementos}">
</div>
<form action='{$phpself}' method='post'>
    <div class='col-lg-12 col-xs-12'>
    {include file={$file}}
    </div>
    <div class='campo'>
        <input type='submit' class="btn btn-default" name='crear' value='Crear' />
    </div>
</form>
