<?php
 require_once("libs/Controlador.php");
 class Home extends Controlador
 {
  	public function index()
 	{
		$this->cargarVista("index");
	}
	
	public function empresa()
	{
		$this->cargarVista("empresa");		
	}
	public function ganarSubasta()
	{
		$this->cargarVista("ganarSubasta");		
	}
	public function producto()
	{
		$this->cargarVista("producto");
	}
	public function login()
	{
		$this->cargarVista("login");		
	}
	public function medioPago()
	{
		$this->cargarVista("medioPago");		
	}
	public function medioPagoPuja()
	{
		$this->cargarVista("medioPagoPuja");		
	}
	public function nuevaEmpresa()
	{
		$this->cargarVista("nuevaEmpresa");		
	}
	public function nuevoUsuario()
	{
		$this->cargarVista("nuevoUsuario");		
	}
	public function pagoPaquetePuja()
	{
		$this->cargarVista("pagoPaquetePuja");		
	}
	public function realizarPuja()
	{
		$this->cargarVista("realizarPuja");		
	}
	public function registro()
	{
		$this->cargarVista("registro");		
	}
	public function registroEmpresa()
	{
		$this->cargarVista("registroEmpresa");		
	}
	public function registroProducto()
	{
		$this->cargarVista("registroProducto");		
	}
	public function tipoRegistro()
	{
		$this->cargarVista("tipoRegistro");		
	}
	public function usuario()
	{
		$this->cargarVista("usuario");		
	}
	public function register() 
	{
		$nombre = $_POST ["nombre"];
		$username = $_POST ["username"];
		$pass = $_POST ["pass"];
		$pass2 = $_POST ["pass2"];
		$modelo = $this->cargarModelo ( "Usuario" );
		$result = $modelo->insertUser ( $nombre, $username, $pass, $pass2 );
		
		echo "El usuario fue registrado con exito";
		echo "<hr/>";
	}


	public function login1()
	{
		$username = $_POST ["username"];
		$password = $_POST ["pass"];
		
		$modelo = $this->cargarModelo ( "Usuario" );
		$respuesta = $modelo->authenticate ( $username, $password );
		if ($respuesta != null && $respuesta->rowCount () > 0) {
			setcookie ( "chsm", "logedin", time () + 3600, "/" );
			
			header ( "location: /proyecto" );
			exit ();
			
		} else {
			echo "login fallo";
			$this->cargarVista ( "index" );
		}
	}
	public function logout() 
	{
		setcookie ( "chsm", "", time () - 3600, "/" );
		header ( "Location: /proyecto" );
	}

 }
?>