<!doctype html>
<html>
<head>
	 <title>Login</title>
	 <link rel="stylesheet" type="text/css" href="/proyecto/css/main.css">
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
            <li><a href="login.php">Iniciar sesi&oacute;n</a></li>
            <li><a href="tipoRegistro.php">Registrate</a></li>

        </ul>
        </nav>
    </nav>	
<body>
	<div id="contenedor">
		<h2>Login</h2>
		<form  action="#" method="post">
			<p>
				<label for="name">Nombre</label>
				<input name="name" id="name" type="text" required />
			</p>
			<p>
				<label for="name">Clave</label>
				<input name="clave" id="clave" type="password" required />
			</p>
			<button type="submit">Iniciar sesi&oacute;n</button>
			
		</form>
		<h3><a href="registro.php">Registrate</a></h3>
		<h4><a href="index.php">Volver a la p&aacute;gina de inicio</a></h4>
</div>
</body>