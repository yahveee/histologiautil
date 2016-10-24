<?php
include('misFunciones.php');
$mysqli = conectaBBDD();


        //leo los parametros que me pasa el index.php
         $usuario_nombre = $_POST['usuario_nombre'];
         $usuario_clave = $_POST['usuario_clave'];


        
         
         //hago la consulta a la bbdd
         $resultado_consulta = $mysqli ->query("SELECT * FROM usuario where DNI = '$usuario_nombre' ");
         $num_dnis = $resultado_consulta -> num_rows;
         //como solo puede haber como mucho un DNI em este resultado porque el DNI es campo clave lo pongo con un if; si no, se tiene que tratar 
         //todo el resultado de la query con un bucle for por ejemplo
         if($num_dnis > 0){
             //la query es valida y me ha devuelto por lo menos un dni
             //entonces mostrare el menu normal
             //voy a leer el campo DNI y el campo password de la BBDD
             $r = $resultado_consulta -> fetch_array();
             $DNI = $r['DNI'];
             $Password = $r['Password'];
             $Tipo = $r['Tipo'];
             if($usuario_clave == $Password){                 
                 //inicializo la sesion
                 session_start();
                 //guardo los datos del usuario que ha hecho el login correcto
                 $_SESSION['DNI'] = $DNI;
                 $_SESSION['Nombre'] = $r['Nombre'];
                 $_SESSION['Email'] = $r['Email'];
                if($Tipo == 0){                 
                require 'menu_inicio.php';
                 //ejemplo de volcado de una query a un array en php
                 //creo el array
                            }
                else{
                    require 'menu_administrador.php';
                }
                 //ejemplo de volcado de una query a un array en php
                 //creo el array
                $usuarios = array();
                //hago la consulta a la bbdd
                $consulta_usuarios = $mysqli -> query ("select * from usuario");
                //saco el numero de usuarios que hay en la bbdd
                $num_usuarios = $consulta_usuarios -> num_rows;
                
                
//                for($i = 0; $i < $num_usuarios; $i++){
//                    $r = $consulta_usuarios -> fetch_array();
//                    $usuarios[$i][0] = $r['DNI'];
//                    $usuarios[$i][1] = $r['Nombre'];
//                    $usuarios[$i][2] = $r['Apellido'];
//                    $usuarios[$i][3] = $r['Email'];
//                    $Tipo[$i][4]= $r['Tipo'];
//                }
             }
             
             else {
                 require 'mensaje_error.php';
             }
             
         }
         else{
             require 'mensaje_error.php';
         }
         

?>
