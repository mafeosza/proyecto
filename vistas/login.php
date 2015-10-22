<!doctype html>
<html>
<head>
	 <title>Login</title>
	 <link rel="stylesheet" type="text/css" href="/proyecto/css/main.css">
     <script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
     <script type="text/javascript" src="../js/main.js"></script>
</head>
<header>
    	<h1 class="titulo1">Subastas</h1>
  	</header>
        <!-- Navegacion -->
    <nav>
        <nav>
        <ul class="styloMenu">
            <li><a href="#">Sobre nosotros</a></li>
            <li><a href="#">Contactenos</a></li>
            <li><a href="login">Iniciar sesi&oacute;n</a></li>
            <li><a href="tipoRegistro">Registrate</a></li>
        </ul>
        </nav>
    </nav>	
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
				<input name="clave" class="clave" type="password"/>
			</p>
			<input type="submit" class="boton" value="Iniciar sesi&oacute;n" />
		</form>
		<h3><a href="registro">Registrate</a></h3>
		<h4><a href="index">Volver a la p&aacute;gina de inicio</a></h4>
</div>
</body>