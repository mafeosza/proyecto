<?php 
require_once("libs/Modelo.php");

class Producto extends Modelo
{
	function __construct()
	{
		parent::__construct();
	}

	function insertProducto($datos) 
	{
		return	$this->query (" INSERT INTO `proyectophp`.`producto` (`idproducto`, `foto`, `nombre`, `precio`, `caracteristicas`,
		 `tiempoEnvio`, `estadoProducto`, `empresa_idempresa`)
		  VALUES (NULL, '".$datos['url']."', '".$datos['nombre']."', '".$datos['precio']."', '".$datos['caracteristicas']."', 
		  	'".$datos['tiempo']."', '1', '".$datos['empresa']."')");
	}
}
?>