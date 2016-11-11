<!doctype html>
<html>
	<head>
		<title>Inicio - USIL Match</title>
		<link rel="stylesheet" href="estilos/usilmatch.css" />
	</head>
	<body id="iniciar" background="usil1.jpg">
		<div id="inician">
                <?php include 'plantillas/cabecera.php' ?>
		<section>
		<h2>Iniciar Sesión</h2>
		
		<form action = "procesar_sesion.php" method = "post">
		
		Usuario de Infosil: <input name = "info" type = "text" /><br/>
		Contraseña: <input name = "password" type = "password" /><br/>
		<button>Iniciar</button>
		
		<?php if (isset($_GET['error'])){ ?>
		<p> Usuario o contraseña incorrecta.</p>
		<?php } ?>
		</section>
		<a href = "index.php">Regresar</a>
                </div>
		<?php include 'plantillas/pie.php' ?>
	</body>
</html>