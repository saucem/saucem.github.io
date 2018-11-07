<?php
	$nombre = $_POST['nombre'];
	$mail = $_POST['mail'];
	$empresa = $_POST['empresa'];

	$header = 'From: ' . $mail . " \r\n";
	$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
	$header .= "Mime-Version: 1.0 \r\n";
	$header .= "Content-Type: text/plain";

	$mensaje = "Este mensaje fue enviado por " . $nombre . ",
	 de la empresa " . $empresa . " \r\n";
	$mensaje .= "Su e-mail es: " . $mail . " \r\n";
	$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
	$mensaje .= "Enviado el " . date('d/m/Y', time());

	$para = 'info@todocopiasrl.com.ar';
	$asunto = 'Consulta Producto - Enviado desde formulario web';

	mail($para, $asunto, utf8_decode($mensaje), $header);

	//echo starting point ------------------------------------------------------------------------------->>
	
	echo '

	<html lang="es">
	<head>
	    <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Todocopia · Resultado</title>
	    <link rel="shortcut icon" href="images/tdc-circular-color.png" type="image/vnd.microsoft.icon" />
	    <link rel="stylesheet" href="../css/bootstrap.css" type="text/css">
	    <link rel="stylesheet" href="../css/main.css" type="text/css">
	    <link rel="stylesheet" href="../css/lp.css" type="text/css">
		<style>
			body {
				background-color: rgb(88,206,234);
				background-image: url("../images/mailbox-open.png");
				background-size: contain;
				background-position: center bottom;
			}
		</style>
	</head>
	<body>
	    <!-- jQuery (necessary for Bootstraps JavaScript plugins) --> 
		<script src="js/jquery-1.11.2.min.js"></script>

		<!-- Include all compiled plugins (below), or include individual files as needed --> 
		<script src="js/bootstrap.js"></script>

	    <div class="container">
	        <div class="row text-right">
                <div class="col-xs-2 col-sm-1"><img src="images/ribbon_tdc_logo_highres.png" alt="Logo" class="brand-logo-md"></div>
                <div class="col-xs-4 col-sm-4 col-sm-offset-6 hidden-xs"><a href="index.html" class="lp-menu-item">Visita nuestro sitio</a></div>
                <div class="col-xs-10 col-sm-1 hidden-xs"><a href="javascript:history.back(1)" class="lp-menu-item">Volver</a></div>
	        </div>
	        <div class="row">
	            <div class="col-xs-12 col-sm-6 col-sm-offset-6 col-md-4 col-md-offset-8 success-message text-center" id="">
	            	<h1 class="msg-title">Su consulta<br/>ha sido enviada<br/>correctamente!</h1>
	            	<h3 class="msg-subtitle">Estaremos respondiendo lo antes posible</h3>
	            	<div class="col-xs-12 top-10"><a href="javascript:history.back(1)" class="btn btn-success wide">Volver</a></div>
	            </div>
	        </div>
	    </div>
	</body>
	</html>
	
	';

	//echo ending point -------------------------------------------------------------------------------<<
?>
