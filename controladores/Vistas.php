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