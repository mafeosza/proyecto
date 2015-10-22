<!doctype html>
<html>
<head>
	 <title>Registro producto</title>
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
            <li><a href="login">Iniciar sesi&oacute;n</a></li>
            <li><a href="tipoRegistro">Registrate</a></li>
            <li><a href="empresa">Empresa</a></li>
        </ul>
        </nav>
    </nav>
<body>
    <section id="contenedor1">
        <h2>Registro Producto</h2>
   <form action="#" method="post"> 
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
            <h4><a href="index">Ir a la p&aacute;gina principal</a></h4>
    </section>
</body>