<?php
session_start();

?>

<!doctype html>
<html>
    <head>
        <title>Registra curso</title>
    </head>
    <script>
        var c = confirm("Inicio de sesión iniciado (Para desaparecer esta alerta pulse Aceptar)");
        if(c == true){
             alert("Adiós");
        }else{
             confirm("Inicio de sesión iniciado (Para desaparecer esta alerta pulse Aceptar)");
        }
    </script>
    <body background="usil3.png">
        <div style="
    background-color: #58ACFA;
    width: 30%;
    margin-top: 10%;
    margin-left: 35%;
    text-align: center;
    color: white; 
    font-family: arial; ">
        <?php include 'plantillas/cabecera.php' ?>
        <?php include 'plantillas/menu.php' ?>
		
      <section>
		<h2>Registra tu curso aqui.</h2>
       
        <form    action="procesar_curso.php"    method="post">
        Nombre del Curso: <input type="text" name="curso"/>
        <br />
        Bloque: <input type="text" name="bloque"/>
        <br />
        Ciclo: <input type="text" name="ciclo"/>
        <br />
        Preferencia: <input type="text" name="preferencia"/>
        <br />
        <button>Registrar curso.</button>
        </form>
	</section>
	</div>	
	<?php include 'plantillas/pie.php' ?>
    </body>
<html>