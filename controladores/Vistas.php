<?php
 require_once("libs/Controlador.php");
 
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