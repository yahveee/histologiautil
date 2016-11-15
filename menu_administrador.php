<?php
//ahora sesion_start() con la sesion que iniciamos en login
if(!isset($_SESSION) ){session_start();}
//leo el valor que guarde en la variable Nombre
$nombre = $_SESSION['Nombre'];
$Tipo = $_SESSION['Tipo'];
?>
<?php

if($Tipo == 1){
    echo '
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="active navbar-brand" href="#" onclick="cargInicio()">HISTOLOGIA</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">ADMINISTRADOR</a></li>
            <li><a href="#" style="margin-left: 5px;" onclick="cargUsuarios()">ALUMNOS</a></li>
            <li><a href="#" style="margin-left: 5px;" onclick="cargAdministrador()">ADMINISTRAR ALUMNOS</a></li>
            <li><a href="#" style="margin-left: 5px;" onclick="cargAltaa()">ALTA ALUMNOS</a></li>
            <li><a href="#" style="margin-left: 5px;" onclick="cargBajaa()">BAJA ALUMNOS</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
              <li><a href="#"><?php echo $nombre;?></a></li>   
          </ul>
        </div><!--/.nav-collapse -->
      </div>
</nav>
<div style="position: absolute; top: 0px; right: 300px; z-index: 3000;">
    <img src="imagenes/'. $_SESSION['DNI'].'.jpg" class="img-circle" style="width: 80px;">
</div>';
}
if($Tipo == 2){
    echo '<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="active navbar-brand" href="#" onclick="cargInicio()">HISTOLOGIA</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">EDITOR</a></li>
            <li><a href="#" style="margin-left: 5px;" onclick="cargEQuiz()">EDITAR QUIZ</a></li>
            <li><a href="#" style="margin-left: 5px;" onclick="cargEReverso()">EDITAR REVERSO</a></li>
            <li><a href="#" style="margin-left: 5px;" onclick="cargEWho()">EDITAR WHOISWHO?</a></li>
            <li><a href="#" style="margin-left: 5px;" onclick="cargEOveja()">EDITAR OVEJA-PAREJA</a></li>
            <li><a href="#" style="margin-left: 5px;" onclick="cargEAdivina()">EDITAR ADIVINA</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
              <li><a href="#"><?php echo $nombre;?></a></li>   
          </ul>
        </div><!--/.nav-collapse -->
      </div>
</nav>
<div style="position: absolute; top: 0px; right: 300px; z-index: 3000;">
    <img src="imagenes/'. $_SESSION['DNI'].'.jpg" class="img-circle" style="width: 80px;">
</div>';
}
if($Tipo == 1){
    echo '<div id="marcoCentral">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="btn btn-block text-center" style="background-color: #122b40; color: #fff; font-size: 48px;" onclick="cargUsuarios()">ALUMNOS</div>
    <br>
    <br>
    <div class="btn btn-block text-center" style="background-color: #245269; color: #fff; font-size: 48px;" onclick="cargAdministrar()">ADMINISTRAR ALUMNO</div>
    <br>
    <br>
    <div class="btn btn-block text-center" style="background-color: #286090; color: #fff; font-size: 48px;" onclick="cargAltaa()">DAR DE ALTA ALUMNO</div>
    <br>
    <br>
    <div class="btn btn-block text-center" style="background-color: #1b6d85; color: #fff; font-size: 48px;" onclick="cargBajaa()">DAR DE BAJA ALUMNO</div>
    <br>
    <br>

</div>';
}
if($Tipo == 2){
    echo '<div id="marcoCentral">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="btn btn-block text-center" style="background-color: #122b40; color: #fff; font-size: 48px;" onclick="cargEQuiz()">EDITAR QUIZ</div>
    <br>
    <br>
    <div class="btn btn-block text-center" style="background-color: #245269; color: #fff; font-size: 48px;" onclick="cargEReverso()">EDITAR REVERSO</div>
    <br>
    <br>
    <div class="btn btn-block text-center" style="background-color: #286090; color: #fff; font-size: 48px;" onclick="cargEWho()">EDITAR WHOISWHO</div>
    <br>
    <br>
    <div class="btn btn-block text-center" style="background-color: #1b6d85; color: #fff; font-size: 48px;" onclick="cargEOveja()">EDITAR OVEJA PAREJA</div>
    <br>
    <br>
    <div class="btn btn-block text-center" style="background-color: #31b0d5; color: #fff; font-size: 48px;" onclick="cargEAdivina()">EDITAR ADIVINA</div>
</div>';
}
?>


<script>
        function cargEQuiz(){
            $('#marcoCentral').load("editQuiz.php");
        }
        function cargEReverso(){
            $('#marcoCentral').load("editReverso.php");
        }
        function cargEWho(){
            $('#marcoCentral').load("editWho.php");
        }
        function cargEOveja(){
            $('#marcoCentral').load("editOveja.php");
        }
        function cargEAdivina(){
            $('#marcoCentral').load("editAdivina.php");
        }
        function cargInicio(){
            $('#marcoCentral').load("menu_administrador.php");
        }
        function cargUsuarios(){
            $('#marcoCentral').load("usuarios.php");
        }
        function cargAdministrar(){
            $('#marcoCentral').load("adminAlumnos.php");
        }
        function cargAltaa(){
            $('#marcoCentral').load("altaAlumnos.php");
        }
        function cargBajaa(){
            $('#marcoCentral').load("bajaAlumnos.php");
        }
        $(".nav a").on("click", function(){
            $(".nav").find(".active").removeClass("active");
            $(this).parent().addClass("active");
        });
</script>