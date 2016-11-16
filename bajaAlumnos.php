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
    <input id="usuario_DNI" class="form-control" type="text" placeholder="INTRODUZCA EL DNI">
    <br>
    <button class="btn btn-success btn-block" onclick="chequeaPass();"> BORRAR USUARIO </button>
</div>
<div id="borrar"></div>
<script>
    function chequeaPass(){
                var _usuario_DNI = $('#usuario_DNI').val();
                console.log(_usuario_DNI);
                //console.log(usuario_nombre);
                //console.log(usuario_clave);

                $('#borrar').load("borrarUsuario.php",{
                    usuario_DNI : _usuario_DNI
                    
                });


    }
</script>