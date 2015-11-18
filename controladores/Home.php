<?php
 require_once("libs/Controlador.php");

 class Home extends Controlador
 {
	public function index()
 	{
		$this->cargarVista("index");
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