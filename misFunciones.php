<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function conectaBBDD(){
    require ('configuracion.php');
    $mysqli = new mysqli($servidor, $usuario_mysql, $clave_mysql, $bd, $puerto_mysql );
    $mysqli -> query("SET NAME utf8");
    return $mysqli;
    
}
