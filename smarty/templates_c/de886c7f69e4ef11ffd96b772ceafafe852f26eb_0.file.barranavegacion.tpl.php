<?php
/* Smarty version 3.1.29, created on 2016-06-20 00:56:40
  from "D:\Apuntes\Drive\DaymarERP\smarty\templates\barranavegacion.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57672328588564_45840871',
  'file_dependency' => 
  array (
    'de886c7f69e4ef11ffd96b772ceafafe852f26eb' => 
    array (
      0 => 'D:\\Apuntes\\Drive\\DaymarERP\\smarty\\templates\\barranavegacion.tpl',
      1 => 1466376999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57672328588564_45840871 ($_smarty_tpl) {
?>
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
</ul><?php }
}
