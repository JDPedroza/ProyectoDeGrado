//Varianble modulos
var module1 = document.getElementById('m1');
var module2 = document.getElementById('m2');
var module3 = document.getElementById('m3');
var module4 = document.getElementById('m4');
var module5 = document.getElementById('m5');
var module6 = document.getElementById('m6');

//variables botones
var bconfirmar = document.getElementById('bconfirmar');
var bcancelar = document.getElementById('bcancelar');

//Variable formularios y/o consultas
var impresionFormulario = document.getElementById('impresionFormularios');
var impresionOpcionFormulario = document.getElementById('impresionOpcionesFormulario');

//Variables modulo inventario (m1)
var dInventario = document.getElementById('dInventarios');
	
	var iMateriasPrimaInsumo = document.getElementById('iMateriaPrimasInsumos');
	var iHerramientaEquipos = document.getElementById('iHerramientasEquipos');
	var iProductoProduccion = document.getElementById('iProductosProduccion');
	var iProductoEmbalaje = document.getElementById('iProductosEmbalaje');
	
	var addItem = document.getElementById('addItems');
	var queryItem = document.getElementById('queryItems');
	var alterItem = document.getElementById('alterItems');

//Variables modulo puntos operacion  (m2)
var dPuntoOperacion = document.getElementById('dPuntosOperacion');

//Variables modulo empleados  (m3)
var dEmpleado = document.getElementById('dEmpleados');

//Variables modulo traslados  (m4)
var dTraslado = document.getElementById('dTraslados');

//Variables modulo estadisticas  (m5)
var dEstadistica = document.getElementById('dEstadisticas');

//Variables modulo proveedores  (m6)
var dUsuario = document.getElementById('dUsuarios');

function reset(modulo){

	if(modulo===0){
		module1.classList.remove('invisible');
		module2.classList.remove('invisible');
		module3.classList.remove('invisible');
		module4.classList.remove('invisible');
		module5.classList.remove('invisible');
		module6.classList.remove('invisible');
		impresionFormulario.classList.add('invisible');
		impresionOpcionFormulario.classList.add('invisible');
	}
	//modulo de reseteo 1
	if(modulo!==1){
		if(dInventario.classList.contains('selectOption')){
			dInventario.classList.remove('selectOption');
			dInventario.classList.add('reset');
			dInventario.classList.add('hoverAllow');
		}
	}
	//modulo de reseteo 2
	if(modulo!==2){
		if(dPuntoOperacion.classList.contains('selectOption')){
			dPuntoOperacion.classList.remove('selectOption');
			dPuntoOperacion.classList.add('reset');
			dPuntoOperacion.classList.add('hoverAllow');
		}
	}
	//modulo de reseteo 3
	if(modulo!==3){
		if(dEmpleado.classList.contains('selectOption')){
			dEmpleado.classList.remove('selectOption');
			dEmpleado.classList.add('reset');
			dEmpleado.classList.add('hoverAllow');
		}
	}
	//modulo de reseteo 4
	if(modulo!==4){
		if(dTraslado.classList.contains('selectOption')){
			dTraslado.classList.remove('selectOption');
			dTraslado.classList.add('reset');
			dTraslado.classList.add('hoverAllow');
		}
	}
	//modulo de reseteo 4
	if(modulo!==5){
		if(dEstadistica.classList.contains('selectOption')){
			dEstadistica.classList.remove('selectOption');
			dEstadistica.classList.add('reset');
			dEstadistica.classList.add('hoverAllow');
		}
	}
	//modulo de reseteo 6
	if(modulo!==6){
		if(dUsuario.classList.contains('selectOption')){
			dUsuario.classList.remove('selectOption');
			dUsuario.classList.add('reset');
			dUsuario.classList.add('hoverAllow');
		}
	}
}

bcancelar.addEventListener('click', function () {
	  reset(0);
});