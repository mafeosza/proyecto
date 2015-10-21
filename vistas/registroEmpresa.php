<!doctype html>
<html>
<head>
	 <title>Registro Empresa</title>
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
      <h2>Registro Empresa <br></h2>
        <form action="nuevaEmpresa.php" method="post"> 
            <tr>
                <p>
                    <label for="nombreEmp">Nombre empresa</label>
                    <input name="nombreEmp" id="nombreEmp" type="text" required />
                </p>
                <p>
                    <label for="usuarioEmp">Usuario</label>
                    <input name="usuarioEmp" id="usuarioEmp" type="text" required />
                </p>
                <p>
                    <label for="claveEmp">Clave</label>
                    <input name="claveEmp" id="claveEmp" type="password" required />
                </p>
                <p>
                    <label for="telefonoEmp">Telefono</label>
                    <input name="telefonoEmp" id="telefonoEmp" type="text" required/>
                </p>
                <p>
                    <label for="emailEmp">Correo</label>
                    <input name="emailEmp" id="emailEmp" type="email" required />
                </p>
                 <p>
                    <label for="nombreResp">Nombre encargado</label>
                    <input name="nombreResp" id="nombreResp" type="text" required />
                </p>
                
                
                <p><input type="submit" value="Realizar Registro"  onclick="validar()"/></p>
                
                </tr>
            </form>
           
            <h3><a href="tipoRegistro.php">Volver</a></h3>
    </section>
</body>