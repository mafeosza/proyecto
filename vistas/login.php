<!doctype html>
<html>
<head>
	 <title>Login</title>
	 <link rel="stylesheet" type="text/css" href="/proyecto/css/main.css">
     <script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
     <script type="text/javascript" src="../js/validacion1.js"></script>
</head>
<header> 
	<div id="encabezado">
    	   <h1 class="titulo1"><B>Subastas</B></h1>
        </div>
    	 <!--foundation-->  <script src="../js/modernizr.js"></script>
        <link rel="stylesheet" href="../css/foundation.css">
  	</header>
     <!-- Navegacion -->
    <div class="navegador">  
        <ul id="menu">
            <li><a href="login">. Iniciar sesi&oacute;n     .</a></li>
            <li><a href="tipoRegistro"> Registrate   .</a></li>
        </ul>
    </div>
<body>
	<div id="contenedor1">
		<h2>Login</h2>
		<form  id="login" action="#" method="post">
			<p>
				<label for="name">Nombre</label> 
				<input name="name" id="name" type="text" />
				<span id="error1"></span> 
			</p>
			<p>
				<label for="clave">Clave</label>
				<input name="clave" id="pass" type="password"/>
				<span id="errorp"></span>
			</p>
			<button name="boton" id="boton" class="boton" type="submit" formaction="index" >Iniciar sesi&oacute;n</button>
		</form>
		<h3><a href="tipoRegistro">Registrate</a></h3>
		<h4><a href="index">Volver a la p&aacute;gina de inicio</a></h4>
</div>
</body>