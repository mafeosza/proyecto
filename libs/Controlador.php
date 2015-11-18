<?php
	
	class Controlador 
	{
		protected $parametros;

		public function getParametros(){
			return $this->parametros;
		}

		public function setParametros($parametros){
			$this->parametros=$parametros;
		}

		protected function cargarModelo($nombreModelo){

			$nombreModelo=ucfirst(strtolower($nombreModelo));
			$urlFile='modelos/'.$nombreModelo.'.php';

			if (file_exists($urlFile)) {
				include $urlFile;
					$class = $nombreModelo;
					$models=new $class();
					return $models;
			}else{
				return null;
			}

		}
		protected function cargarVista($nombreVista){

			$nombreVista=ucfirst(strtolower($nombreVista));
			$urlFile='vistas/'.$nombreVista.'.php';
	
			if (file_exists($urlFile)) {
				require_once($urlFile);
				return true;

			}else{
				return null;
			}
		}
	}
?>