<?php
include './misFunciones.php';//siempre debe incluirse para tratar con php-BBDD
//ahora sesion_start() con la sesion que iniciamos en login
if(!isset($_SESSION) ){session_start();}
//leo el valor que guarde en la variable Nombre
$nombre = $_SESSION['Nombre'];
$mysqli = conectaBBDD();//siempre debe incluirse para tratar con php-BBDD

?>
<br>
<br>
<br>
<br>
<div >
        <input id="alumno_DNI" class="form-control" type="text" placeholder="INTRODUZCA EL DNI">
    <br>
        <input id="alumno_nombre" class="form-control" type="text" placeholder="INTRODUZCA EL NOMBRE">
    <br>
        <input id="alumno_apellido" class="form-control" type="text" placeholder="INTRODUZCA EL APELLIDO">
    <br>
        <input id="alumno_email" class="form-control" type="text" placeholder="INTRODUZCA EL E-MAIL">
    <br>
        <input id="alumno_pass" class="form-control" type="text" placeholder="INTRODUZCA LA CONTRASEÑA">
    <br>
    <button class="btn btn-success btn-block" onclick="crearUsuario();"> CREAR USUARIO </button>
</div>
<div id="crear"></div>
<script>
    function crearUsuario(){
                var _alumno_DNI = $('#alumno_DNI').val();
                var _alumno_nombre = $('#alumno_nombre').val();
                var _alumno_apellido = $('#alumno_apellido').val();
                var _alumno_email = $('#alumno_email').val();
                var _alumno_pass = $('#alumno_pass').val();
                

                $('#crear').load("crearAlumno.php",{
                    alumno_DNI : _alumno_DNI,
                    alumno_nombre : _alumno_nombre,
                    alumno_apellido : _alumno_apellido,
                    alumno_email : _alumno_email,
                    alumno_pass : _alumno_pass
                                 
                });
    }
</script>