<?php
include './misFunciones.php';//siempre debe incluirse para tratar con php-BBDD
//ahora sesion_start() con la sesion que iniciamos en login
if(!isset($_SESSION) ){session_start();}
//leo el valor que guarde en la variable Nombre
$nombre = $_SESSION['Nombre'];
$mysqli = conectaBBDD();//siempre debe incluirse para tratar con php-BBDD
$consulta_usuarios = $mysqli -> query ("select * from usuario");//Tambien debe incluirse simpre ya que sera la accion a traves cde php para tratar la bbdd
?>