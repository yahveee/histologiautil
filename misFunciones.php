<?php
function conectaBBDD(){
    require('configuracion.php');
    $mysqli = new mysqli($servidor, $usuario_mysql, $pass_mysql, $bbdd);
    $mysqli -> query("SET NAMES utf8");
    return $mysqli;
}
?>