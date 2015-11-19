<?php
 require_once("libs/Controlador.php");
 

 /* app id: 1683549615196477
    API VERSION : v2.5
   appSecret: 037a719772b6302e807352472cd18a10

   <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1683549615196477',
      xfbml      : true,
      version    : 'v2.5'
    });
  };
344){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
	</script>
 */
	/*
	gogle plus
	nombre proyecto subastas
	El ID del proyecto subastas-1133 
	Número del proyecto
	520284535549
	numero server
	AIzaSyDvoCV4K77bXJBv9hI8opcqLbrrh6BI_ck
	*/

 class Vistas extends Controlador
 {
 	public function registerProducto()
 	{
 		$datos =  array( );

 		
 		$datos['url'] = "img/" .$_FILES["archivo"]["name"];
 		$datos['nombre'] = $_POST['nombre'];
 		$datos['precio'] = $_POST['precio'];
 		$datos['caracteristicas'] = $_POST['caracteristicas'];
 		$datos['fechaCierre'] = $_POST['fechaCierre'];
 		$datos['tiempo'] = $_POST['tiempoEnvio'];
 		$datos['empresa'] = '1';

		$modelo = $this->cargarModelo("Producto");
		$result = $modelo->insertProducto($datos);

		move_uploaded_file($_FILES['archivo']['tmp_name'],"img/" .$_FILES["archivo"]["name"]);
		$this->empresa();
 	}
 	public function registerUsuario() 
	{
		$datos = array();
		$datos['nombre'] = $_POST ["name"];
		$datos['cedula'] = $_POST ["cedula"];
		$datos['usuario'] = $_POST ["usuario"];
		$datos['clave'] = $_POST ["clave"];
		$datos['direccion'] = $_POST ["direccion"];
		$datos['telefono'] = $_POST ["telefono"];
		$datos['email'] = $_POST ["email"];

		$modelo = $this->cargarModelo("Usuario");
		$result = $modelo->insertUser($datos);
		$this->nuevoUsuario();
	}
	public function registerEmpresa() 
	{
		$datos = array();
		$datos['nombre'] = $_POST ["nombreEmp"];
		$datos['usuario'] = $_POST ["usuarioEmp"];
		$datos['clave'] = $_POST ["claveEmp"];
		$datos['telefono'] = $_POST ["telefonoEmp"];
		$datos['email'] = $_POST ["emailEmp"];
		$datos['responsable'] = $_POST ["nombreResp"];

		$modelo = $this->cargarModelo("Empresa");
		$result = $modelo->insertEmpresa($datos);
		$this->nuevaEmpresa();
	}
 	public function comprarPujas()
 	{
 		$this->cargarVista("comprarPujas");
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
	public function index()
 	{
		$this->cargarVista("index");
	}
	
 }
 ?>