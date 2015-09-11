<!doctype html>
<html>
<head>
	 <title>Registro producto</title>
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
    
   <form action="#" method="post"> 
   			<section>
                <h2>Registro Producto</h2>
            </section>
                <p>
                    <label for="urlFoto">URL Foto</label>
                    <input name="urlFoto" id="urlFoto" type="text" required />
                </p>
                <p>
                    <label for="nombre">Nombre Producto</label>
                    <input name="nombre" id="nombre" type="text" required />
                </p>
                <p>
                    <label for="precio">Precio Producto</label>
                    <input name="precio" id="precio" type="text" required />
                </p>
                <p>
                    <label for="caracteristicas">Caracteristicas</label>
                    <textarea name="usuario" id="usuario" required> </textarea>
                </p>
                <p>
                    <label for="fechaCierre">Fecha cierre subasta</label>
                    <input name="fechaCierre" id="fechaCierre" type="text" required />
                </p>
                <p>
                    <label for="tiempoEnvio">Tiempo aproximado de envio</label>
                    <input name="tiempoEnvio" id="tiempoEnvio" type="text" required/>
                </p>               
                
                <p><input type="submit" value="Realizar Registro"  onclick="validar()"/></p>
            </form>
            <h3><a href="index.php">Ir a la p&aacute;gina principal</a></h3>
</body>