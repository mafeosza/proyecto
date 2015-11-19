<!doctype html>
<html>
<head>
    <title>Producto</title>
    <link rel="stylesheet" href="/proyecto/css/main.css"/>
</head>
<header>
    	<h1 class="titulo1">Subastas</h1>
         <!--foundation-->  <script src="../js/modernizr.js"></script>
        <link rel="stylesheet" href="../css/foundation.css">
  	</header>
        <!-- Navegacion -->
    <nav>
        <nav>
        <ul class="styloMenu">
            <li><a href="login">Iniciar sesi&oacute;n</a></li>
            <li><a href="tipoRegistro">Registrate</a></li>
            <li><a href="usuario">Usuario</a></li>
		    <li><a href="empresa">Empresa</a></li>
        </ul>
        </nav>
    </nav>
            <script type="text/javascript">
        
        $(function(){
            $('#datepicker').datetimepicker();
        });
            
        function countdown(id){
            var fecha=new Date('2015','10','20','00','00','00')
            var hoy=new Date()
            var dias=0
            var horas=0
            var minutos=0
            var segundos=0

            if (fecha>hoy){
                    var diferencia=(fecha.getTime()-hoy.getTime())/1000
                    dias=Math.floor(diferencia/86400)
                    diferencia=diferencia-(86400*dias)
                    horas=Math.floor(diferencia/3600)
                    diferencia=diferencia-(3600*horas)
                    minutos=Math.floor(diferencia/60)
                    diferencia=diferencia-(60*minutos)
                    segundos=Math.floor(diferencia)

                    document.getElementById(id).innerHTML='<span class="element">' + dias + ' dias</span><span class="element">' + horas + ' horas</span><span class="element">' + min + ' minutos</span><span class="element">' + seg + ' segundos</span>'

                    if (dias>0 || horas>0 || minutos>0 || segundos>0){
                            setTimeout("countdown(\"" + id + "\")",1000)
                    }
            }
            else{
                    document.getElementById('restante').innerHTML='<span class="element">' + dias + ' dias</span><span class="element">' + horas + ' horas</span><span class="element">' + min + ' minutos</span><span class="element">' + seg + ' segundos</span>'
            }
        }
        </script>
<body onload="countdown('contador')">
 <section id= "contenedor1">
 	<h2>Producto "nombre"</h2>
 	<p><br></p>
 	<!--<section>-->
 		<div class="foto1">
 			<img src="/proyecto/img/index.jpg" width="50%" height="80%">
 		
 			<h4><a href="#">Precio actual: n</a></h4>
 		</div>	
 		<div>
                <div id="contador"><span class="element">1 dias</span>
                    <span class="element">4 horas</span>
                    <span class="element">14 min</span>
                    <span class="element">17 seg</span>
                </div>
 			
 		</div>
 		<div>
 			<h4> Caracteristicas:<br> 
 				computador acer, color negro, 4gb de ram</h4>
 			<h4>Fecha cierre de la subasta: </h4>
 			<h4>Tiempo aproximado de envio: </h4>
			<button> <a href="index"><h4>Ir a p&aacute;gina de inicio</h4></button>
			<button> <a href="realizarPuja"><h4>Hacer oferta</h4></button>
 		</div>
 	<!--</section>-->
 </section>
</body>
