<?php
include './misFunciones.php';//siempre debe incluirse para tratar con php-BBDD
//ahora sesion_start() con la sesion que iniciamos en login
if(!isset($_SESSION) ){session_start();}
//leo el valor que guarde en la variable Nombre
$mysqli = conectaBBDD();//siempre debe incluirse para tratar con php-BBDD
$alumno_DNI = $_POST["alumno_DNI"];
$alumno_nombre = $_POST["alumno_nombre"];
$alumno_apellido = $_POST["alumno_apellido"];
$alumno_email = $_POST["alumno_email"];


//$crear_usuarios = $mysqli -> query ('INSERTINTO usuario where VALUES('. $alumno_DNI .','..','..'');

?>

