<!doctype html>
<html>
<head>
	 <title>Registro Empresa</title>
	 <link rel="stylesheet" type="text/css" href="/proyecto/css/main.css">
         <script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
     <script type="text/javascript" src="../js/validacion2.js"></script>
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
    <section id="contenedor1">
      <h2>Registro Empresa <br></h2>
        <form action="nuevaEmpresa" method="post"> 
            <tr>
                <p>
                    <label for="nombreEmp">Nombre empresa</label>
                    <input name="nombreEmp" id="nombreEmp" type="text"  />
                    <span id="er1"></span>
                </p>
                <p>
                    <label for="usuarioEmp">Usuario</label>
                    <input name="usuarioEmp" id="usuarioEmp" type="text"  />
                    <span id="er2"></span>
                </p>
                <p>
                    <label for="claveEmp">Clave</label>
                    <input name="claveEmp" id="claveEmp" type="password"  />
                    <span id="er3"></span>
                </p>
                <p>
                    <label for="telefonoEmp">Telefono</label>
                    <input name="telefonoEmp" id="telefonoEmp" type="text" />
                    <span id="er4"></span>
                </p>
                <p>
                    <label for="emailEmp">Correo</label>
                    <input name="emailEmp" id="emailEmp" type="email"  />
                    <span id="er5"></span>
                </p>
                 <p>
                    <label for="nombreResp">Nombre encargado</label>
                    <input name="nombreResp" id="nombreResp" type="text"  />
                    <span id="er6"></span>
                </p>
                <p><input type="submit" value="Realizar Registro"  onclick="validar()"/></p>
                </tr>
            </form>
            <h3><a href="tipoRegistro">Volver</a></h3>
    </section>
</body>