
<!DOCTYPE html>
<?php
include ('misfunciones.php');
$mysqli = conectaBBDD();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Prueba de Php</title>
        <link rel ="stylesheet" href="css/bootstrap.min.css"
        <style>
           
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h2>
                            EJEMPLO DE INICIO DE SESION DE PHP
                    </h2>
                </div>
                <div class="col-md-2"></div>
            </div>
        <?php
       //Crear una variable en PHP. todas se inician con el DOLAR $
        $usuario_nombre = $_POST['usuario_nombre'];
        $usuario_clave = $_POST ['usuario_clave'];
        $resultado_consulta = $mysqli ->query ("SELECT * FROM usuario WHERE DNI = '$usuario_nombre' ");
        $numero_dnis = $resultado_consulta -> num_rows;
        //como solo puede haber un solo DNI en este resultado porque el DNI es campo clave lo
        //pongo con un if; si no, se teiene que tratar todo el resultado de la query
        //con un bucle for por ejemplo
       
        if($numero_dnis > 0){
            //la query es valida y me ha devuelto por lo menos un dni
            //entonces mostrare el menu normal
            //voy a leer el campo DNI y el campo pasword de la bbdd
            $r = $resultado_consulta -> fetch_array();
            $DNI = $r['DNI'];
            $password = $r['password'];
            if($usuario_clave == $password){
               
           
        ?>
       
            <br>
            <br>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                   <H1 CLASS="text-center "> BIENVENIDO A LA WEB DE HISTOLOGIA</H1>
                   
                </div>
                <div class="col-md-4"></div>
            </div>
       
        <?php
        }
       
        else {
            ?>
       
            <br>
            <br>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <h3 class="text-center"> EL USUARIO O CONTRASEÑA NO SON CORRECTOS</h3>
                   
                </div>
                <div class="col-md-4"></div>H
            </div>
       
        <?php
        }}
        ?>
         </div>
 
    </body>
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</html>