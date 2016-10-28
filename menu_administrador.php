<?php
//ahora sesion_start() con la sesion que iniciamos en login
if(!isset($_SESSION) ){session_start();}
//leo el valor que guarde en la variable Nombre
$nombre = $_SESSION['Nombre'];
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
            <li><a href="#" style="margin-left: 5px;" onclick="cargUsuarios()">ADMINISTRAR</a></li>
            <li><a href="#" style="margin-left: 5px;" onclick="cargQuiz()">QUIZ</a></li>
            <li><a href="#" style="margin-left: 5px;" onclick="cargReverso()">REVERSO</a></li>
            <li><a href="#" style="margin-left: 5px;" onclick="cargWho()">WHOISWHO?</a></li>
            <li><a href="#" style="margin-left: 5px;" onclick="cargOveja()">OVEJA-PAREJA</a></li>
            <li><a href="#" style="margin-left: 5px;" onclick="cargAdivina()">ADIVINA</a></li>
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
            <li><a href="#" style="margin-left: 5px;" onclick="cargUsuarios()">ADMINISTRAR</a></li>
            <li><a href="#" style="margin-left: 5px;" onclick="cargQuiz()">QUIZ</a></li>
            <li><a href="#" style="margin-left: 5px;" onclick="cargReverso()">REVERSO</a></li>
            <li><a href="#" style="margin-left: 5px;" onclick="cargWho()">WHOISWHO?</a></li>
            <li><a href="#" style="margin-left: 5px;" onclick="cargOveja()">OVEJA-PAREJA</a></li>
            <li><a href="#" style="margin-left: 5px;" onclick="cargAdivina()">ADIVINA</a></li>
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
?>

<div id="marcoCentral">
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
    <div class="btn btn-block text-center" style="background-color: #122b40; color: #fff; font-size: 48px;" onclick="cargQuiz()">QUIZ</div>
    <br>
    <br>
    <div class="btn btn-block text-center" style="background-color: #245269; color: #fff; font-size: 48px;" onclick="cargReverso()">REVERSO</div>
    <br>
    <br>
    <div class="btn btn-block text-center" style="background-color: #286090; color: #fff; font-size: 48px;" onclick="cargWho()">WHO IS WHO?</div>
    <br>
    <br>
    <div class="btn btn-block text-center" style="background-color: #1b6d85; color: #fff; font-size: 48px;" onclick="cargOveja()">OVEJA-PAREJA</div>
    <br>
    <br>
    <div class="btn btn-block text-center" style="background-color: #31b0d5; color: #fff; font-size: 48px;" onclick="cargAdivina()">ADIVINA</div>
</div>

<script>
        function cargQuiz(){
            $('#marcoCentral').load("quiz.php");
        }
        function cargReverso(){
            $('#marcoCentral').load("reverso.php");
        }
        function cargWho(){
            $('#marcoCentral').load("whoIsWho.php");
        }
        function cargOveja(){
            $('#marcoCentral').load("oveja.php");
        }
        function cargAdivina(){
            $('#marcoCentral').load("adivina.php");
        }
        function cargInicio(){
            $('#marcoCentral').load("menu_inicio.php");
        }
        function cargUsuarios(){
            $('#marcoCentral').load("usuarios.php");
        }
        $(".nav a").on("click", function(){
            $(".nav").find(".active").removeClass("active");
            $(this).parent().addClass("active");
        });
</script>