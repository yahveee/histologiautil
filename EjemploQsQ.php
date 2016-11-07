<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PRUEBA quien es quien</title>
        <link rel="Stylesheet" href="css/bootstrap.min.css">
          
        
    </head>
    <body>
        <div class="container" id="centro">
            <div class="row">
                <div class="col-md-12">
                    <div id="posicionY"></div>
                    <br>
                    <div id="posicionX"></div>
                    <div id="etiqueta01" class="btn btn-primary" style="position: absolute; top: 200px; left: 100px; z-index: 2;">ETIQUETA 1</div>
                    <div style="position: absolute; top: 200px; left: 100px; border: #000 solid 1px;"></div>
                    <div style="position: absolute; top: 400px; left: 100px; border: #000 solid 1px;"></div>
                    <div style="position: absolute; top: 600px; left: 100px; border: #000 solid 1px;"></div>
                    <div style="position: absolute; top: 800px; left: 100px; border: #000 solid 1px;"></div>
                    <div id></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
            
        </div>
       
    </body>
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/jquery-ui.min.js"></script> 
    <script src="js/bootstrap.js"></script>
    <script>
        $('#etiqueta01').draggable({
            drag : function(){
              var posicion = $(this).position();
              $('#posicionY').html(posicion.top);
              $('#posicionX').html(posicion.left);             
            },
            stop : function(){
              var posicion = $(this).position();
              var identificador = $(this).attr('id');
              cambiaAcierto(identificador, posicion);
             
            }
            
        });
        
        function cambiaAcierto(_id, _posicion){
            var altura = window.innerHeight;    
            if (_posicion.top < altura/4){
                      $('#' + _id).removeClass("btn-primary").addClass("btn-danger");
                      $('#' + _id).animate({top: "200px", left: "100px"});
            }else if (_posicion.top >= altura/4 && _posicion.top < altura/2){
                      $('#etiqueta01').removeClass("btn-danger").addClass("btn-info");
                      $('#' + _id).animate({top: "400px", left: "100px"});
            }else if (_posicion.top >= altura/2 && _posicion.top < altura/4*3){
                      $('#etiqueta01').removeClass("btn-info").addClass("btn-danger");
                      $('#' + _id).animate({top: "600px", left: "100px"});
            }else if (_posicion.top >= altura/2 && _posicion.top < altura/4*4){
                      $('#etiqueta01').removeClass("btn-danger").addClass("btn-primary");
                      $('#' + _id).animate({top: "800px", left: "100px"});
            }
        }

    </script>
</html>
