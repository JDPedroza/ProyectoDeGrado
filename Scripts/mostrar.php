<?php
namespace Mostrar;

use Conexion\conexion;

class mostrar{

    private $base;
    private $listfields;
    private $namefields;
    private $listdatos;
    private $datos;

    public function __construct()
    {
        $conexion = new conexion();
        $this->base = $conexion->getDataBase();
    }

    public function nombresFilas($tabla){
		$this->listfields = $this->base->prepare("SHOW COLUMNS FROM $tabla;");
		$this->listfields->execute();
		$this->namefields = $this->listfields->fetchAll();
		return $this->namefields;
    }

    public function datosTabla($tabla){
    	$this->listdatos = $this->base->prepare("SELECT * FROM $tabla;");
		$this->listdatos->execute();
		$this->datos = $this->listdatos->fetchAll();
    	return $this->datos;
    }
}
