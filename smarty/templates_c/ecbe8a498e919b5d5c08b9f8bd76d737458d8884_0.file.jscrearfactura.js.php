<?php
/* Smarty version 3.1.29, created on 2016-06-21 08:16:53
  from "D:\Drive\DaymarERP\js\jscrearfactura.js" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5768dbd5270550_20709612',
  'file_dependency' => 
  array (
    'ecbe8a498e919b5d5c08b9f8bd76d737458d8884' => 
    array (
      0 => 'D:\\Drive\\DaymarERP\\js\\jscrearfactura.js',
      1 => 1466445252,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5768dbd5270550_20709612 ($_smarty_tpl) {
?>
//document.getElementById('fechafactura').valueAsDate = new Date;

//Mostrar div ocultos
var listadiv = ["facturatablaclientes", "facturatablaelementos"];

function mostrarlistaclientes() {
    mostrarcontenido("facturatablaclientes");
}

function mostrarlistaelementos() {
    mostrarcontenido("facturatablaelementos");
}

function mostrarcontenido(divseleccionado) {
    if (document.getElementById(divseleccionado).style.display != "none") {
        document.getElementById(divseleccionado).style.display = "none";
    } else {
        for (var i = 0; i < listadiv.length; i++) {
            document.getElementById(listadiv[i]).style.display = "none";
        }
        ;
        document.getElementById(divseleccionado).style.display = "inline";
    }
}

//controlar tabla de elementos
var arrayelementosañadidos = new Array();
actualizartabla();

function addelemento(codigo) {
    for (var i = 0; i < arrayelementos.length; i++) {
        if (codigo == arrayelementos[i][0]) {
            arrayelementosañadidos.push(arrayelementos[i]);
            addlinea(arrayelementos[i]);
        }
    }
}

function addlinea(elemento) {
    var tabla = document.getElementById("tablaelementos");
    var tr = document.createElement("tr");
    var tdcod = document.createElement("td");
    var tdnombre = document.createElement("td");
    var tdprecio = document.createElement("td");
    var tdcoste = document.createElement("td");
    var tdcantidad = document.createElement("td");
    var tdborrar = document.createElement("td");
    tdcod.appendChild(document.createTextNode(elemento[0]));
    tdnombre.appendChild(document.createTextNode(elemento[1]));
    tdprecio.appendChild(document.createTextNode(elemento[2]));
    tdcoste.appendChild(document.createTextNode(elemento[3]));
    var inputcantidad = document.createElement("input");
    inputcantidad.type = "number";
    inputcantidad.name = "descuento";
    inputcantidad.className = "form-control"
    inputcantidad.step = "any";
    inputcantidad.value = "1";
    inputcantidad.style = "width: 70px;";
    inputcantidad.addEventListener("change", actualizarresultadotabla);
    tdcantidad.appendChild(inputcantidad);
    var inputborrar = document.createElement("a");
    inputborrar.type = "button";
    inputborrar.className = "btn btn-default"
    inputborrar.appendChild(document.createTextNode('X'));
    $valor = elemento[0];
    if (inputborrar.addEventListener) {
        inputborrar.addEventListener('click', function () {
            borrarvalor($valor)
        }, false);
    } else {
        inputborrar.attachEvent("onclick", function () {
            borrarvalor($valor)
        });
    }
    tdborrar.appendChild(inputborrar);
    tr.appendChild(tdcod);
    tr.appendChild(tdnombre);
    tr.appendChild(tdprecio);
    tr.appendChild(tdcoste);
    tr.appendChild(tdcantidad);
    tr.appendChild(tdborrar);
    tabla.appendChild(tr);
    actualizarresultadotabla();
}

//cambia el valor del input oculto en una cadena con el codigo de los elementos elegidos y su cantidad, cada valor va separado por un ;
function actualizarresultadotabla() {
    var texto = "";
    var tabla = document.getElementById("tablaelementos");
    for (var i = 0; i < tabla.children.length; i++) {
        texto = texto + ";"+ tabla.children[i].children[0].childNodes[0].nodeValue;
        texto = texto + ";"+ tabla.children[i].children[2].childNodes[0].nodeValue;
        texto = texto + ";"+ tabla.children[i].children[3].childNodes[0].nodeValue;
        texto = texto + ";"+ tabla.children[i].children[4].childNodes[0].value;
    }
    texto=texto.substring(1);
    document.getElementById("contenidotabla").value = texto;
    actualizartotales();
}

function borrarvalor(campo) {
    var elementonoborrado = false;
    for (var i = 0; i < arrayelementosañadidos.length && elementonoborrado === false; i++) {
        if (arrayelementosañadidos[i][0] == campo) {
            arrayelementosañadidos.splice(i, 1);
            elementonoborrado = true;
        }
    }
    actualizartabla();
}

function actualizartabla() {
    var tabla = document.getElementById("tablaelementos");
    while (tabla.children.length != 0) {
        tabla.removeChild(tabla.firstChild);
    }
    for (var i = 0; i < arrayelementosañadidos.length; i++) {
        addlinea(arrayelementosañadidos[i]);
    }
    actualizartotales();
}

function actualizartotales() {
    var tabla = document.getElementById("tablaelementos");
    var descuento = document.getElementById("facdescuento").value;
    var tipoiva = document.getElementById("factipoiva").value;
    var valor = 0;
    var coste = 0;
    for (var i = 0; i < tabla.children.length; i++) {
        valor += tabla.children[i].children[2].childNodes[0].nodeValue * tabla.children[i].children[4].childNodes[0].value;
        coste += tabla.children[i].children[3].childNodes[0].nodeValue * tabla.children[i].children[4].childNodes[0].value;
    }
    document.getElementById("faccoste").value = coste;
    var valordescontado = valor - ((descuento / 100) * valor);
    document.getElementById("facbaseimponible").value = valordescontado;
    document.getElementById("faciva").value = (tipoiva / 100) * valordescontado;
    document.getElementById("factotal").value = ((tipoiva / 100) * valordescontado) + valordescontado;
}
<?php }
}
