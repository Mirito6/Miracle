<!doctype html>
<html>
	<head>
		<title>Registro de Cuenta - USIL Match</title>
		<link rel="stylesheet" href="estilos/usilmatch.css" />
	</head>
        <script>
                alert("Por favor, llene sus datos correctamente");
        </script>
	<body id="registro" background="usil2.jpg">
		<?php include 'plantillas/cabecera.php' ?>
		
		<section>
		<h2>Registro de cuenta de usuario</h2>
		
		<form action = "procesar_usuario.php" method = "post">
		
		Usuario de infosil: <input name = "info" type = "text" /><br/>
		Email: <input name = "email" type = "text" /><br/>
		Contraseña: <input name = "password" type = "password" /><br/>
		<button>Registrarme</button>
		
		</section>
		<a href = "index.php">Regresar</a>
		<?php include 'plantillas/pie.php' ?>
	</body>
</html>