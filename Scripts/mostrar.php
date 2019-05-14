<?php

	function nombresFilas($tabla){
		global $base;
		$listfields = $base->prepare("SHOW COLUMNS FROM $tabla;");
		$listfields->execute();
		$namefields = $listfields->fetchAll();
		return $namefields;
    }

    function datosTabla($tabla){
    	global $base;
    	$listdatos = $base->prepare("SELECT * FROM $tabla;");
		$listdatos->execute();
		$datos = $listdatos->fetchAll();
    	return $datos;
    }
