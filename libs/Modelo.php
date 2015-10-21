<?php
	class Modelo
	{
		protected $conexion;
		protected $nombretabla;
		protected $host;
		protected $db_name ;
		protected $username;
		protected $password;
		
		function __construct()
		{
		 $host = "localHost";
		 $db_name = "proyectophp";
		 $username = "root";
		 $password = ""; 
			try{
			
				$this->conexion = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);

			}catch(PDOException $exception){

				echo "Conexion error".$exception->getMessage();
			}
		}


		protected function query($query)
		{
			return $this->conexion->query($query);
		}

	function update($columnaset,$where)
	{
		$coma="";
		$query="update $this->nombretabla set ";
		if($columnaset==null)
		{
			return $query;

		}else
		{
			$coma="";
			foreach($columnaset as $llave=>$valor)
			{
				$query.=$coma."$llave=$valor";
				$coma=",";
			}		
		}

		$query.=" WHERE ";
		if($where==null)
		{			
			return $query;
		}else
		{
			$coma="";
			foreach($where as $llave=>$valor)
			{
					
				$query.=$coma."$llave=$valor ";
				$coma=" and ";
			}

			$consulta= $this->conexion->prepare($query);
			return $consulta;
		}
	}


	function delete ($columna, $where)
	{

		$coma="";
		$query = "DELETE FROM {$columna}";
		if ($where==null) 
		{
			return "Hay Error";
		} else 
		{
			$query.=" WHERE ";
			$coma = '';
			foreach ($where as $key => $datos) 
			{
				$query.=$coma."$key = $datos";
				$coma=", ";
			}
		
			$consulta= $this->conexion->prepare($query);
			return $consulta;
		}
	}

	function insert($columna,$value)
	{

		$query ="INSERT INTO {$columna} SET ";
		$coma ="";
		foreach ($value as $key => $datos) 
		{
			$query = $query . $coma . "$key = ?";
			$coma=",";
		}
		$consulta= $this->conexion->prepare($query);
		return $consulta;
	}

	function select ($columnas,$where)
	{
		$coma="";
		$query="SELECT";

		if($columnas==null)
		{
			$query.=" * ";
		}else 
		{
			$coma = '';
			foreach ($columnas as $columna) 
			{
				$query.=$coma."$columna";
				$coma=", ";
			}
		}

		$query.="FROM ".$this->nombretabla;
		
		if ($where == null) 
		{
			$consulta= $this->conexion->prepare($query);
			return $consulta;
		}else
		{
			$query.=" WHERE ";
			$coma="";
			foreach ($where as $llave => $valor) 
			{
				$query.=$coma."$llave = $valor";
				$coma="and";
			}
			$consulta= $this->conexion->prepare($query);
			return $consulta;
		}
	}

}
?>	