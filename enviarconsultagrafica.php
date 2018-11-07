<?php
	//Definición y asignación de las variables
	$nombre = $_POST['nombre'];
	$cliente = $_POST['cliente'];
	$empresa = $_POST['empresa'];
	$telefono = $_POST['telefono'];
	$correo = $_POST['correo'];
	$servicio = $_POST['servicio'];
	$cantidad = $_POST['cantidad'];
	$disposicion = $_POST['disposicion'];
	$acabado = $_POST['acabado'];
	$comentario = $_POST['comentario'];

	//Construcción del encabezado del mail y asignación a la variable $header
	$header = 'From: ' . $correo . " \r\n";
	$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
	$header .= "Mime-Version: 1.0 \r\n";
	//$header .= "Content-Type: text/html; charset=ISO-8859-1"; 
	$header .= "Content-Type: text/html; charset=utf-8"; 

	$mensaje = "Esta solicitud fue enviada por " . $nombre . ",
	 de la empresa/comercio " . $empresa . " \r\n". "<br/>";
	$mensaje .= "Su n&uacute;mero de tel&eacute;fono es " . $telefono . " \r\n". "<br/>";
	$mensaje .= "Su e-mail es " . $correo . " \r\n". "<br/><br/>";
	$mensaje .= "Necesita realizar <strong>" . $cantidad . "</strong> " . $servicio . ", dispuestas en " . $disposicion . " \r\n". "<br/>";
	$mensaje .= "Eligi&oacute; la terminaci&oacute;n " . $acabado . " para su trabajo" . " \r\n". "<br/>";
	$mensaje .= "Los detalles adicionales del trabajo son: " . $comentario . " \r\n". "<br/><br/>";
	$mensaje .= "Esta solicitud fue enviada el d&iacute;a: " . date('d/m/Y', time());
	
	$para = 'administracion@todocopiasrl.com.ar';
	$asunto = 'Solicitud de servicios graficos - Enviada desde formulario web';

	mail($para, $asunto, $mensaje, $header);

	//echo starting point ------------------------------------------------------------------------------->>
	
	echo '

	<!DOCTYPE html>
	<html lang="es">

		<head>
		    <meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
		    <title>Todocopia · Resultado</title>
		    <link rel="shortcut icon" href="images/tdc-circular-color.png" type="image/vnd.microsoft.icon" />
		    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
		    <link rel="stylesheet" href="css/main.css" type="text/css">
		    <link rel="stylesheet" href="css/lp.css" type="text/css">
		</head>

		<body>
	       	<!-- jQuery (necessary for Bootstrap JavaScript plugins) --> 
	    	<script src="js/jquery-1.11.2.min.js"></script>
	    	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	    	<script src="js/bootstrap.js"></script>
	        <!-- Page content starting point -->
	        <nav class="navbar navbar-inverse navbar-static-top navbar-slim straight-corners" role="navigation">
	            <div class="navbar-header col-sm-8">
	                
	                <a class="navbar-brand col-xs-6 col-sm-12 hidden-xs inactive" href=""><img src="images/ribbon_tdc_logo_highres.png" id="brand_logo" alt="Logo Todocopia"/>&nbsp;TODOCOPIA</a>
	                
	                <a class="navbar-brand col-xs-6 col-sm-12 visible-xs inactive" href=""><img src="images/ribbon_tdc_logo_highres.png" id="brand_logo" alt="Logo Todocopia"/></a>
	                
	                <a class="btn btn-dark-gray visible-xs col-xs-6 top-7" href="tel:+5401142574652">Llamar ahora!</a>

	        </div>
	            <div class="navbar-right top-5 hidden-xs">
	                <h4 class="pseudo-menu-item"><span class="prefix">+54&nbsp;011&nbsp;</span>4257-4652</h4>
	            </div>
	        </nav>

	        <div class="container">
	            <div class="row">
	                <div class="col-xs-12 top-20 hidden-xs"></div>
	                <div class="clearfix"></div>

	                <div class="col-xs-12  col-md-10 col-md-offset-1 lp-info-product bottom-20" id="resultado-solicitud-grafica">
	                    <div class="row vertical-align">
	                        <div class="col-md-6 no-gutter">
	                            <img src="images/graphic-services.png" class="img-responsive center-block rounded-left-5">
	                        </div>

	                        <div class="col-md-6 text-center">
	                        	<h1>&#161;Perfecto&#33;</h1>
	                        	<!--<h2>Ya enviaste tu pedido de archivos</h2>-->
	                        	<h2>Ya enviaste tu consulta</h2>
	                        	<br>
	                        	<p class="text-justify">
	                        		En breve te estaremos cotizando el trabajo que solicitaste. Mientras tanto, te invitamos a visitar nuestro sitio y conocer qu&eacute; m&aacute;s tenemos para ofrecerte.
	                        	</p>
	                        	<p>&#161;Gracias por elegirnos&#33;</p>
	                        	<br>
	                        	<a href="index.html" class="col-xs-12 col-md-4 col-md-offset-1 btn btn-warning bottom-20">Visitar el sitio</a>
	                        	<a href="javascript:history.back(1)" class="col-xs-12 col-md-4 col-md-offset-2 btn btn-clear-dark bottom-20">Volver</a>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </body>

	</html>
	
	';

	//echo ending point -------------------------------------------------------------------------------<<
?>
