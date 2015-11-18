<?php

	class FrontController{
		private $controlador="Home";
		private $metodo="index";
		private $params;


	public function index(){

		$url = $_SERVER["REQUEST_URI"];
   		$path = trim(parse_url($url, PHP_URL_PATH), "/");
 	try{
   			@list($appname,$controlador, $metodo, $params)=explode("/",$path,4);
   			@$params=(explode("/", $params));

   		if ($controlador==null) {

   			$controlador=$this->controlador;
   		}

   		if($metodo==null){
			$metodo=$this->metodo;
   		}

   		$micontrolador=$this->cargarContolador($controlador);

   		if ($micontrolador!=null)
   		{   			
   			$micontrolador->setParametros($params);
   			$stringMetodo=$metodo;


   			if (method_exists($micontrolador,$stringMetodo)) {
   				
   				$micontrolador->$stringMetodo();
   			}else{
   				echo "metodo no existe";
   			}
   		}else {
   			
   			echo "El controlador no existe";
   		}
   	}catch (Exception $e){

   		echo $e->getMessage();
   	}


	}

	function cargarContolador($controlador){

		$controlador=ucfirst(strtolower($controlador));
		$urlFile='controladores/' . $controlador . '.php';

		if (file_exists($urlFile)) {
			# code...
			include $urlFile;
			$class = $controlador;
			$controller=new $class();
			return $controller;
		}else{
			return null;
		}
	}


	public function getControlador(){
		return $this->controlador;
	}

	public function setControlador($controlador){
		$this->controlador=$controlador;
	}

	public function getMetodo(){
		return $this->metodo;
	}

	public function setMetodo($metodo){
		$this->metodo=$metodo;
	}

	public function getParams(){
		return $this->params;
	}

	public function setParams($params){
		$this->params=$params;
	}
}

$FrontController= new FrontController();
$FrontController->index();

?>