<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Prueba de Php</title>
        <link rel ="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                background: black;
                background-image: url("imagenes/FondoNegro.jpg");
                background-repeat: no-repeat;
            }
        </style>
    </head>
    <body>
        <div class="container" id="centro">
            <div class="row text-center" style="color:white;">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h2>
                            EJEMPLO DE INICIO DE SESION DE PHP
                    </h2>
                </div>
                <div class="col-md-2"></div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <!--<form action="index2.php" method="post">-->
                       
                        <input id="usuario_nombre" class="form-control" type="text" placeholder="Usuario">
                        <br>
                        <input id="usuario_clave" class="form-control" type="password" placeholder="Contraseña">
                        <br>
                        <br>
                        <button class="btn btn-success btn-block" onclick="chequeaPassword();">Entrar</button>
                    <!--</form>-->
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        <?php
       
        ?>
    </body>
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        function chequeaPassword(){
            var _usuario_nombre = $('#usuario_nombre').val();
            var _usuario_clave = $('#usuario_clave').val();
           // console .log(_usuario_nombre);
           
           $('#centro').load("login.php",{
               usuario_nombre : _usuario_nombre,
               usuario_clave : _usuario_clave
           });
           
        }
    </script>
</html>