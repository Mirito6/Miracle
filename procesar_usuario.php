<?php
include 'ini.php';
#Entrada

$info = $_POST['info'];
$email = $_POST['email'];
$password = $_POST['password'];

#Proceso
#Encriptar el password
$password_hash = md5($password);

#Guardar el usuario en la base de datos
#mysql_connect('localhost', 'root', '');
#mysql_select_db('gamestore');
$query = "INSERT INTO usuarios VALUES (NULL, '$info', '$email', '$password_hash')";

#mysql_query($query);
$db -> query($query);

#Salida
header('Location: resultado_usuario.php');
?>