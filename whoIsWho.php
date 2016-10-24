<?php
//ahora sesion_start() con la sesion que iniciamos en login
if(!isset($_SESSION) ){session_start();}
//leo el valor que guarde en la variable Nombre
$nombre = $_SESSION['Nombre'];
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Prueba de PHP</title>
        <link rel="Stylesheet" href="css/bootstrap.min.css">
        <link rel="Stylesheet" href="css/jquery-ui.min.css">
    </head>
    <body>
        <div id="ejemplo" style="width: 700px; height: 500px; border: solid black 1px;">
            
        </div>

    </body>
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script>
    $(function(){
    $('#ejemplo').click(function (e) { //Relative ( to its parent) mouse position 
        var posX = e.pageX;
        var posY = e.pageY;
        $('#ejemplo').append('<div id="recuadro" style="width: 50px; height: 50px; border: solid green 1px; position: absolute; top:'+posY+'px; left:'+posX+'px;"></div>');
        $('#recuadro').resizable({
            resize: function(){},
            stop: function(){}
    });
    });
    });
    </script>
</html>