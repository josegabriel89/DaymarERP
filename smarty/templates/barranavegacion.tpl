<ul class="nav nav-pills nav-justified" role="navigation">
    <li class="active"><a type="button" onclick="location.href = 'home.php'" name="home" value="Home">Home</a></li>
    <li><a type="button" onclick="location.href = 'contabilidad.php'" name="contabilidad" value="Contabilidad">Contabilidad</a></li>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            Facturas <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
            <li><a type="button" onclick="location.href = 'listafacturas.php'" name="listafacturas" value="Lista de Facturas">Lista</a></li>
            <li><a  type="button" onclick="location.href = 'crearfactura.php'" name="crearfactura" value="Crear factura">Crear</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            Clientes <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
            <li><a type="button" onclick="location.href = 'listaclientes.php'" name="listaclientes" value="Lista de clientes">Lista</a></li>
            <li><a type="button" onclick="location.href = 'crearcliente.php'" name="crearcliente" value="Crear cliente">Crear</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            Gastos <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
            <li><a type="button" onclick="location.href = 'listagastos.php'" name="listagastos" value="Lista de gastos">Lista</a></li>
            <li><a type="button" onclick="location.href = 'creargasto.php'" name="creargasto" value="Crear gasto">Crear</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            Elementos <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
            <li><a type="button" onclick="location.href = 'listaelementos.php'" name="listaelementos" value="Lista de elementos">Lista</a></li>
            <li><a type="button" onclick="location.href = 'crearelemento.php'" name="crearelemento" value="Crear elemento">Crear</a></li>
        </ul>
    </li>
</ul>