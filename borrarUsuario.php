<?php
include './misFunciones.php';//siempre debe incluirse para tratar con php-BBDD
//ahora sesion_start() con la sesion que iniciamos en login
if(!isset($_SESSION) ){session_start();}
//leo el valor que guarde en la variable Nombre
$mysqli = conectaBBDD();//siempre debe incluirse para tratar con php-BBDD
$usuario_DNI = $_POST["usuario_DNI"];
$borrar_usuarios = $mysqli -> query ('delete from usuario where DNI ='. $usuario_DNI .'');

?>


