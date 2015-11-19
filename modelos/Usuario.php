<?php 
require_once("libs/Modelo.php");

class Usuario extends Modelo
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

	function insertUser($datos) 
	{
		return	$this->query (" INSERT INTO usuario (`idusuario`, `nombre`, `cedula`, `usuario`, 
			`clave`, `direccion`, `telefono`, `email`, `cantidadPujas`) 
			VALUES (NULL, '".$datos['nombre']."', '".$datos['cedula']."', '".$datos['usuario']."', '".$datos['clave']."',
			 '".$datos['direccion']."', '".$datos['telefono']."', '".$datos['email']."', 10)");
	}
}
?>