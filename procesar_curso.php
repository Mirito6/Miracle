<?php
include 'ini.php';
#Entrada

$curso = $_POST['curso'];
$bloque = $_POST['bloque'];
$ciclo = $_POST['ciclo'];
$preferencia = $_POST['preferencia'];
#Proceso


#Guardar el usuario en la base de datos
#mysql_connect('localhost', 'root', '');
#mysql_select_db('gamestore');
$query = "INSERT INTO cursos VALUES (NULL, '$curso', '$bloque', '$ciclo', '$preferencia')";

#mysql_query($query);
$db -> query($query);

#Salida
header('Location: resultado_curso.php');
?>