<!doctype html>
<html>
<head>
	 <title>Registro</title>
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
    <section id="contenedor1">
        <h2>Registro Usuario<br></h2> 
        <form action="nuevoUsuario.php" method="post"> 
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
     </section>       
</body>