<!doctype html>
<html>
<head>
	 <title>Registro producto</title>
	 <link rel="stylesheet" type="text/css" href="/proyecto/css/main.css">
     <script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
     <script type="text/javascript" src="../js/validacion1.js"></script>
</head>
<header>
         <div id="encabezado">
           <h1 class="titulo1"><B>Subastas</B></h1>
        </div>
         <!--foundation-->  <script src="../js/modernizr.js"></script>
        <link rel="stylesheet" href="../css/foundation.css">
    </header>
        <!-- Navegacion -->
    <div class="navegador">  
        <ul id="menu">
            <li><a href="login">. Iniciar sesi&oacute;n     .</a></li>
            <li><a href="tipoRegistro"> Registrate   .</a></li>
            <li><a href="empresa">Empresa .</a></li>
        </ul>
    </div>
<body>
    <section id="contenedor1">
        <h2>Registro Producto</h2>
   <form action="#" method="post"> 
   	  <p>
        <label for="urlFoto">URL Foto</label>
         <input type="file" name="archivo" id="archivo"></input>
         <span id="ep1"></span> 
                </p>
                <p>
                    <label for="nombre">Nombre Producto</label>
                    <input name="nombre" id="nombre" type="text"  />
                    <span id="ep2"></span> 
                </p>
                <p>
                    <label for="precio">Precio Producto</label>
                    <input name="precio" id="precio" type="text" />
                    <span id="ep3"></span> 
                </p>
                <p>
                    <label for="caracteristicas">Caracteristicas</label>
                    <textarea name="usuario" id="usuario" > </textarea>
                    <span id="ep4"></span> 
                </p>
                <p>
                    <label for="fechaCierre">Fecha cierre subasta</label>
                    <input name="fechaCierre" id="fechaCierre" type="text"/>
                    <span id="ep5"></span> 
                </p>
                <p>
                    <label for="tiempoEnvio">Tiempo aproximado de envio</label>
                    <input name="tiempoEnvio" id="tiempoEnvio" type="text" />
                </p>               
                
                <p><button name="boton" id="boton" class="boton" type="submit" formaction="register" >Realizar Registro</button></p>
            </form>
            <h4><a href="index">Ir a la p&aacute;gina principal</a></h4>
    </section>
</body>