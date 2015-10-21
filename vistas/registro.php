<!doctype html>
<html>
<head>
	 <title>Registro</title>
	 <link rel="stylesheet" type="text/css" href="/proyecto/css/main.css">
</head>
<body>
	<!--<nav>
        <ul>
            <li><a href="#">Sobre nosotros</a></li>
            <li><a href="#">Contactenos</a></li>
            <li><a href="login.php">Iniciar sesi&oacute;n</a></li>
            <li><a href="#">Usuario</a></li>
		    <li><a href="#">Empresa</a></li>

        </ul>
    </nav>-->
    
   <form action="nuevoUsuario.php" method="post"> 
   			<section>
                <h2>Registro Usuario</h2>
            </section>
                <p>
                    <label for="name">Nombre</label>
                    <input name="name" id="name" type="text" required />
                </p>
                <p>
                    <label for="cedula">Cedula</label>
                    <input name="cedula" id="cedula" type="text" required />
                </p>
                <p>
                    <label for="usuario">Usuario</label>
                    <input name="usuario" id="usuario" type="text" required />
                </p>
                <p>
                    <label for="clave">Clave</label>
                    <input name="clave" id="clave" type="password" required />
                </p>
                <p>
                    <label for="direccion">Direcci&oacute;n</label>
                    <input name="direccion" id="name" type="text" required />
                </p>
                <p>
                    <label for="telefono">Telefono</label>
                    <input name="telefono" id="telefono" type="text" required/>
                </p>
                <p>
                    <label for="email">Correo</label>
                    <input name="email" id="email" type="email" required />
                </p>
                
                
                <p><input type="submit" value="Realizar Registro"  onclick="validar()"/></p>
            </form>
            <h3><a href="tipoRegistro.php">Volver</a></h3>
</body>