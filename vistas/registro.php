<!doctype html>
<html>
<head>
	 <title>Registro</title>
	 <link rel="stylesheet" type="text/css" href="/proyecto/css/main.css">
     <script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
     <script type="text/javascript" src="../js/validacion2.js"></script>
</head>
<header>
        <h1 class="titulo1">Subastas</h1>
        <script src="../js/modernizr.js"></script>
        <link rel="stylesheet" href="../css/foundation.css">
    </header>
        <!-- Navegacion -->
    <nav>
        <nav>
        <ul class="styloMenu">
            <li><a href="login">Iniciar sesi&oacute;n</a></li>
            <li><a href="tipoRegistro">Registrate</a></li>
        </ul>
        </nav>
    </nav>
<body>
    <section id="contenedor1">
        <h2>Registro Usuario<br></h2> 
        <form action="nuevoUsuario" method="post"> 
                <p>
                    <label for="name">Nombre</label>
                    <input name="name" id="name" type="text" />
                    <span id="e1"></span>
                </p>
                <p>
                    <label for="cedula">Cedula</label>
                    <input name="cedula" id="cedula" type="text"  />
                    <span id="e2"></span>
                </p>
                <p>
                    <label for="usuario">Usuario</label>
                    <input name="usuario" id="usuario" type="text"  />
                    <span id="e3"></span>
                </p>
                <p>
                    <label for="clave">Clave</label>
                    <input name="clave" id="clave" type="password"  />
                    <span id="e4"></span>
                </p>
                <p>
                    <label for="direccion">Direcci&oacute;n</label>
                    <input name="direccion" id="name" type="text"  />
                    <span id="e5"></span>
                </p>
                <p>
                    <label for="telefono">Telefono</label>
                    <input name="telefono" id="telefono" type="text" />
                </p>
                <p>
                    <label for="email">Correo</label>
                    <input name="email" id="email" type="email"  />
                    <span id="e6"></span>
                </p>
                <p><input type="submit" value="Realizar Registro" /></p>
            </form>
            <h3><a href="tipoRegistro">Volver</a></h3>
     </section>       
</body>