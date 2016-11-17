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
$alumno_pass = $_POST["alumno_pass"];


$crear_usuarios = $mysqli -> query ("INSERT INTO usuario(DNI,Nombre,Apellido,Password,Email) VALUES($alumno_DNI".",'".$alumno_nombre."','".$alumno_apellido."','".$alumno_pass."','".$alumno_email."')");

if($mysqli->affected_rows == 1){
    echo 'SE HA INSERTADO EL USUARIO';
}
else{
    echo $mysqli->error;
}

?>

