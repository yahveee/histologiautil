<?php
//ahora sesion_start() con la sesion que iniciamos en login
if(!isset($_SESSION) ){session_start();}
//leo el valor que guarde en la variable Nombre
$nombre = $_SESSION['Nombre'];
?>
 
<style>
h1 {
  color: #CA7218;
  text-align: center;
}
 
/* Contenedor del puzzle*/
#contenedorPuzzle {
    margin: 20px auto;
    width: 450px;
    background: rgba(20,20,20,0.8);
    box-shadow: 0px 0px 10px  2px #777;
    color: #ccc;
    padding: 20px;
    border-radius: 10px;
    overflow: hidden;
}
 
 
/* Puzzle */
#contenedorPiezas{
    background: #e7931a;
    width: 200px;
    height: 200px;
    float: left;
    margin-left: 10px;
    box-shadow: 0px 0px 10px  2px #d0eb6a;
}
 
#puzzle {
    background: #d0eb6a;
    width: 200px;
    height: 200px;
    float: right;
    margin-right: 10px;
    box-shadow: 0px 0px 10px  2px #e7931a;
}
.contenedorPieza {
    width: 100px;
    height: 100px;
    float: left;
}
 
#contenedorPuzzle img {
    float: left;
    padding: 1px;
    width: 98px;
    height: 98px;
}
 
</style>
 
<br><br><br><br>
<body onload="comprobarnavegador();">
    <header>
        <h1> Puzzle Molecular </h1>
    </header>
 
    <section id="contenedorPuzzle">
        <div id="contenedorPiezas" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">
            <img id="pieza3" src="http://1.bp.blogspot.com/-8LurPyhzlD4/USVEdAH-KJI/AAAAAAAAA54/INQRSWmH79k/s320/pieza3.jpg" alt="pieza3" draggable="true" ondragstart="start(event)" ondragend="end(event)">
            <img id="pieza2" src="http://1.bp.blogspot.com/-daD5d1V4ct4/USVEdAGqdDI/AAAAAAAAA50/XXo8rBlTGpQ/s320/pieza2.jpg" alt="pieza2" draggable="true" ondragstart="start(event)" ondragend="end(event)">
            <img id="pieza4" src="http://4.bp.blogspot.com/-2R3yc2Kggvo/USVEd9UUR5I/AAAAAAAAA6A/YBxpgYG15NI/s320/pieza4.jpg" alt="pieza4" draggable="true" ondragstart="start(event)" ondragend="end(event)">
            <img id="pieza1" src="http://3.bp.blogspot.com/-gA3KvKhA-8w/USVEdAiWi6I/AAAAAAAAA58/btNKJqIkXHc/s320/pieza1.jpg" alt="pieza1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
        </div>
            <br>
        <div id="puzzle">
            <div class="contenedorPieza" id="uno" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
            <div class="contenedorPieza" id="dos" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
            <div class="contenedorPieza" id="tres" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
            <div class="contenedorPieza" id="cuatro" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
        </div> 
    </section>
</body>
<script>
/**
* Función que se ejecuta al arrastrar el elemento.
**/
function start(e) {
    e.dataTransfer.effecAllowed = 'move'; // Define el efecto como mover (Es el por defecto)
    e.dataTransfer.setData("Text", e.target.id); // Coje el elemento que se va a mover
    e.target.style.opacity = '0.4';
}
 
/**
* Función que se ejecuta se termina de arrastrar el elemento.
**/
function end(e){
    e.target.style.opacity = ''; // Restaura la opacidad del elemento          
    e.dataTransfer.clearData("Data");          
}
 
/**
* Función que se ejecuta cuando un elemento arrastrable entra en el elemento desde del que se llama.
**/
function enter(e) {
    return true;
}
 
/**
* Función que se ejecuta cuando un elemento arrastrable esta sobre el elemento desde del que se llama.
* Devuelve false si el objeto se puede soltar en ese elemento y true en caso contrario.
**/
function over(e) {
    if ((e.target.className == "contenedorPieza") || (e.target.id == "contenedorPiezas"))
        return false;
    else
    return true;
}
   
/**
* Función que se ejecuta cuando un elemento arrastrable se suelta sobre el elemento desde del que se llama.
**/
function drop(e){
    e.preventDefault(); // Evita que se ejecute la accion por defecto del elemento soltado.
    var elementoArrastrado = e.dataTransfer.getData("Text");
    e.target.appendChild(document.getElementById(elementoArrastrado)); // Coloca el elemento soltado sobre el elemento desde el que se llamo esta funcion
    comprobarPuzzle();
}
 
function comprobarPuzzle(){
    if((document.getElementById('pieza1').parentNode.id=='uno') &&
        (document.getElementById('pieza2').parentNode.id=='dos') &&
        (document.getElementById('pieza3').parentNode.id=='tres') &&
        (document.getElementById('pieza4').parentNode.id=='cuatro'))
    {
        alert('Felicidades, has hecho el puzzle de Histologia.');
    }
}
 
/**
* Muestra un mensaje de advertencia.
**/
function comprobarnavegador() {
    if(
        (navigator.userAgent.toLowerCase().indexOf('msie ') > -1) ||
        ((navigator.userAgent.toLowerCase().indexOf('safari') > -1) && (navigator.userAgent.toLowerCase().indexOf('chrome') == -1)))
    {
        alert("Tu navegador no soporta correctamente las funciones Drag & Drop de HTML5. Prueba con otro navegador.");
    }
 
}
</script>