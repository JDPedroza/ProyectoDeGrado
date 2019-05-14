//Menu lado arriba
	iMateriasPrimaInsumo.addEventListener('click', function () {
	  dInventario.classList.remove('reset');
	  dInventario.classList.add('selectOption');
	  dInventario.classList.remove('hoverAllow');
	  reset(1);
	});
	iHerramientasEquipos.addEventListener('click', function () {
	  dInventario.classList.remove('reset');
	  dInventario.classList.add('selectOption');
	  dInventario.classList.remove('hoverAllow');
	  reset(1);
	});
	iProductosProduccion.addEventListener('click', function () {
	  dInventario.classList.remove('reset');
	  dInventario.classList.add('selectOption');
	  dInventario.classList.remove('hoverAllow');
	  reset(1);
	});
	iProductosEmbalaje.addEventListener('click', function () {
	  dInventario.classList.remove('reset');
	  dInventario.classList.add('selectOption');
	  dInventario.classList.remove('hoverAllow');
	  reset(1);
	});

//Menu lado atras
	addItem.addEventListener('click', function () {
	  module2.classList.add('invisible');
	  module3.classList.add('invisible');
	  module4.classList.add('invisible');
	  module5.classList.add('invisible');
	  module6.classList.add('invisible');
	  impresionFormulario.classList.remove('invisible');
	});
	queryItems.addEventListener('click', function () {
	  module2.classList.add('invisible');
	  module3.classList.add('invisible');
	  module4.classList.add('invisible');
	  module5.classList.add('invisible');
	  module6.classList.add('invisible');
	  impresionFormulario.classList.remove('invisible');
	  impresionOpcionFormulario.classList.remove('invisible');
	});
	alterItems.addEventListener('click', function () {
	  module2.classList.add('invisible');
	  module3.classList.add('invisible');
	  module4.classList.add('invisible');
	  module5.classList.add('invisible');
	  module6.classList.add('invisible');
	  impresionFormulario.classList.remove('invisible');
	});
	
	dPuntoOperacion.addEventListener('click', function () {
	  if(this.classList.contains('reset')){
		dPuntoOperacion.classList.remove('reset');
	  };
	  this.classList.add('selectOption');
	  this.classList.remove('hoverAllow');
	});
	dEmpleado.addEventListener('click', function () {
	  this.classList.add('selectOption');
	  this.classList.remove('hoverAllow');
	});
	dTraslado.addEventListener('click', function () {
	  this.classList.add('selectOption');
	  this.classList.remove('hoverAllow');
	});
	dEstadistica.addEventListener('click', function () {
	  this.classList.add('selectOption');
	  this.classList.remove('hoverAllow');
	});
	dUsuario.addEventListener('click', function () {
	  this.classList.add('selectOption');
	  this.classList.remove('hoverAllow');
	});