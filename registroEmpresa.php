<!doctype html>
<html>
<head>
	 <title>Registro Empresa</title>
	 <link rel="stylesheet" type="text/css" href="css/main.css">
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
    
   <form action="nuevaEmpresa.php" method="post"> 
   			<section>
                <h2>Registro Empresa</h2>
            </section>
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

</body>