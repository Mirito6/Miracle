<?php
include 'ini.php';
#Entrada

$info = $_POST['info'];
$password = $_POST['password'];

#Proceso
#Encriptar el password
$password_hash = md5($password);

#Guardar el usuario en la base de datos
#mysql_connect('localhost', 'root', '');
#mysql_select_db('gamestore');
$query = "SELECT * FROM usuarios WHERE info = '$info' AND contraseña = '$password_hash'";

$sentencia = $db->query($query);
$filas = $sentencia->rowCount();

#Salida
if ($filas == 0){
	header('Location: iniciar_sesion.php?error=1');
}else{
	session_start();
	$_SESSION['autenticado'] = true;
	header('Location: registrar_curso.php');
}
?>