<?php 
require_once("libs/Modelo.php");

class Empresa extends Modelo
{
	function __construct()
	{
		parent::__construct();
		$this->nombretabla="usuario";
	}

	function getUsuario()
	{
		return $this->query("SELECT * from users");	
	}

	function authenticate($username,$password)
	{
		return $this->query("select * from users where username='$username' and pass='$password'");
	}

	function insertEmpresa($datos) 
	{
		return	$this->query (" INSERT INTO empresa (`idempresa`, `nombreEmpresa`, `usuario`, `clave`, `telefono`, `emailEmpresa`, `nombreResponsable`) VALUES (NULL, '".$datos['nombre']."', '".$datos['usuario']."', '".$datos['clave']."', '".$datos['telefono']."', '".$datos['email']."', '".$datos['responsable']."');");
	}
}
?>