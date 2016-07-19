<form action='{$phpself}' method='post'>
    <div class="col-lg-12 col-xs-12 container">
        <div class="col-lg-4 col-sm-6  col-xs-12" style="padding-top: 25px">
            <input class="btn btn-info form-control" type="submit" name="fechaprefijada" value="Este mes">
            <input class="btn btn-info form-control" type="submit" name="fechaprefijada" value="Mes anterior">
            <input class="btn btn-info form-control" type="submit" name="fechaprefijada" value="Ultimos 3 meses">
        </div>
        <div class="col-lg-4  col-sm-6  col-xs-12" style="padding-top: 25px">
            <input class="btn btn-info form-control" type="submit" name="fechaprefijada" value="Este Año">
            <input class="btn btn-info form-control" type="submit" name="fechaprefijada" value="Año anterior">
            <input class="btn btn-info form-control" type="submit" name="fechaprefijada" value="Ultimos 3 Años">
        </div>

        <div class="col-lg-4  col-sm-6 col-xs-12" id="fechas">
            <div class='campo col-xs-6 col-sm-6 col-md-12'>
                <label for='fecha' >Desde:</label><br/>
                <div>
                    <div class="col-lg-4">
                        <input type='text' class="form-control col-xs-4" name='fechadesdedia' id="fechadesdedia" value='{$fechadesdedia}' placeholder="dia" />
                    </div>
                    <div class="col-lg-4">
                        <input type='text' class="form-control col-xs-4" name='fechasdesdemes'  id="fechasdesdemes" value='{$fechadesdemes}' placeholder="mes"/>
                    </div>
                    <div class="col-lg-4">
                        <input type='text' class="form-control col-xs-4" name='fechadesdeanno'  id="fechadesdeanno" value='{$fechadesdeanno}' placeholder="año"/>
                    </div>
                </div>
            </div>
            <div class='campo col-xs-6 col-sm-6 col-md-12'>
                <label for='fecha' >Hasta:</label><br/>
                <div>
                    <div class="col-lg-4">
                        <input type='text' class="form-control col-xs-4" name='fechahastadia' id="fechahastadia" value='{$fechahastadia}' placeholder="dia" />
                    </div>
                    <div class="col-lg-4">
                        <input type='text' class="form-control col-xs-4" name='fechashastames'  id="fechashastames" value='{$fechahastames}' placeholder="mes"/>
                    </div>
                    <div class="col-lg-4">
                        <input type='text' class="form-control col-xs-4" name='fechahastaanno' id="fechahastaanno"  value='{$fechahastaanno}'placeholder="año"/>
                    </div>
                </div>
            </div> 
            <div class='campo'>
                <input class="btn btn-default form-control" type="submit" name="comprobar" value="Comprobar fechas" style="margin-top: 20px">
            </div>
        </div>

        <div id="haberydebe">
            <div class="col-lg-6 col-xs-6 container">
                <div class='campo'>
                    <label for='haber' >Haber:</label><br/>
                    <input type='text' class="form-control" name='haber' maxlength="50" disabled="true" value="{$haber}"/><br/>
                </div>

            </div>
            <div class="col-lg-6 col-xs-6 container">
                <div class='campo'>
                    <label for='debe' >Debe:</label><br/>
                    <input type='text' class="form-control" name='debe' maxlength="50" disabled="true" value="{$debe}"/><br/>
                </div>

            </div>
        </div>

        {if count($contenidofacturas) neq 0 || count($contenidogastos) neq 0 }
            <div class="col-lg-12 col-xs-12 container" style="margin-top: 20px">
                <div class="col-lg-6 col-sm-6  col-xs-12">
                    <table class="table table-hover table-striped table-responsive" id="tablafacturas">
                        <tr>               
                            <th colspan="2">Facturas:</th>
                        </tr> 
                        {foreach from=$contenidofacturas item=linea}
                            <tr>
                                {foreach from=$linea item=dato}
                                    {*Añadir un evento para ver dicha factura*}
                                    <td>{$dato}</td>
                                {/foreach}
                            </tr>
                        {/foreach}
                    </table>
                </div>
                <div class="col-lg-6  col-sm-6 col-xs-12">
                    <table class="table table-hover table-striped table-responsive" id="tablagastos">
                        <tr>               
                            <th colspan="2">Gastos:</th>
                        </tr> 
                        {foreach from=$contenidogastos item=linea}
                            <tr>
                                {foreach from=$linea item=dato}
                                    {*Añadir un evento para ver dicho gasto*}
                                    <td>{$dato}</td>
                                {/foreach}
                            </tr>
                        {/foreach}
                    </table>
                </div>
            </div>
        {/if}
    </div>
</form>