<?php 
require_once("libs/Modelo.php");

class Empresa extends Modelo
{
	function __construct()
	{
		parent::__construct();
	}

	function insertEmpresa($datos) 
	{
		return	$this->query (" INSERT INTO empresa (`idempresa`, `nombreEmpresa`, `usuario`, `clave`, `telefono`, `emailEmpresa`, `nombreResponsable`) VALUES (NULL, '".$datos['nombre']."', '".$datos['usuario']."', '".$datos['clave']."', '".$datos['telefono']."', '".$datos['email']."', '".$datos['responsable']."');");
	}
}
?>