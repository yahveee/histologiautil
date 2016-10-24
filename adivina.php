<?php
//ahora sesion_start() con la sesion que iniciamos en login
if(!isset($_SESSION) ){session_start();}
//leo el valor que guarde en la variable Nombre
$nombre = $_SESSION['Nombre'];
?>
 
 
<style>
 
    .drag {
     width: 60px;
     height:60px;
     padding: .5em;
 margin: 10px;
      color:black;
   background-color: #E6E6B8;
    margin: 10;
     box-shadow: 10px 10px 5px #888888;
    -webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;
 
 }
 .drop {
     width: 150px;
     height: 60px;
     padding: .5em;
     margin: 10px;
     box-shadow: 10px 10px 5px #888888;
     background-color: #E6E6B8;
    margin: 10;
      color:black;
    -webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;
 
 }
#drags{
    width:500;
    height:800;
    resize: height;
     margin-left: auto;
     margin-right: auto;
 
    float:left;
background: rgba(0, 0, 0, 0.6);
    padding: 10px 10px; overflow:auto;
     -webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;
}
#drops{
     width:500;
    height:800;
     resize: height;
     margin-left: 2px;
     margin-right: 2px; overflow:hidden;
    float:right;
background: rgba(0, 0, 0, 0.6);
 
    padding: 10px 10px; overflow:auto;
     -webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;
}
 #quiz {
     width:300;
    height:800;
    width: 100%;
     margin-left: 2px;
     margin-right: 2px;
   text-align:center;
     background-color: #7AA3CC;
    padding: 10px 10px;
     -webkit-border-radius: 10px;
-moz-border-radius: 10px;
    color:white;
    background: rgba(0, 0, 0, 0.6);
border-radius: 10px;
   
 }
 
#quizContainer
{  background-color: #7AA3CC;
     width:300;
    height:200;
    overflow:auto;
    color:white;
    text-align:center;
      padding: 10px 10px;
    -webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;
}
   
</style>
 
<br>
<br>
<br>
<br>
 
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
 
  <script src="js/jquery-3.1.0.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
 
 
 
<div id=quizContainer>
    <p>Quiz</p>
    <div id="drops"></div>
    <div id="drags"></div>
</div>
  <div id="dialog">
      <p> Juego completado</p>
  </div>
  <div id="endOfQuiz">
      <p>ha llegado al final de la prueba </p>
  </div>
  
<script>
 
 
// Aquí estamos creando el xml y la búsqueda de elementos dentro de ella.
var xml = [
  "<quiz><type>dragndrop</type><test>true</test><drags>====D,Mocos,Sangre</drags><drops>8,Verdes,Rojo</drops></quiz>",
          "<quiz><type>dragndrop</type><test>true</test><drags>here,is,三</drags><drops>One,Two,Three</drops></quiz>"];
 
// Temporizador aqui:
var start = new Date;
 
setInterval(function() {
    $('.Timer').text((new Date - start) / 1000 + " Seconds");
}, 1000);
 
var currentXml = 0;
var xmlDoc;
xmlDoc = $.parseXML(xml[0]),
$xml = $(xmlDoc),
$drags = $xml.find("drags"),
$drops = $xml.find("drops");
 
var strDrags = $drags.text().split(",");
var strDrops = $drops.text().split(",");
 
var questions = [];
var answers = [];
ResetAll();  
// Esta función restablece la prueba desde el principio, aquí lo estamos utilizando para iniciar la prueba.
 
// Una función de ayuda
function shuffle(array) {
    var currentIndex = array.length,
        temporaryValue, randomIndex;
 
   
// Aunque aún quedan elementos que se mezclan ...
    while (0 !== currentIndex) {
 
       
// Selecciona un elemento que queda ...
 
        randomIndex = Math.floor(Math.random() * currentIndex);
        currentIndex -= 1;
 
        // And swap it with the current element.
        temporaryValue = array[currentIndex];
        array[currentIndex] = array[randomIndex];
        array[randomIndex] = temporaryValue;
    }
 
    return array;
}
 
 
// Aquí estamos creando diversos mensajes que aparecerán de vez en cuando.
$(function () {
    $("#dialog").dialog({
        autoOpen: false,
        modal: true,
        buttons: {
            "Reset": function () {
                Reset();
                $(this).dialog("close");
            },
                "Next Quiz": function () {
                NextQuiz();
                $(this).dialog("close");
            }
        },
        close: function () {
            Reset();
              $(this).dialog("close");
        }
    });
    $("#endOfQuiz").dialog({
        autoOpen: false,
        modal: true,
        buttons: {
            "Reset": function () {
                ResetAll();
                $(this).dialog("open");
            }
        }
    });
});
 
 
// Esta función restablece la prueba actual.
function Reset() {
    hasAll = 0;
    strDrags = shuffle(strDrags);
    for (var d = 0; d < strDrags.length; d++) {
        $("#draggable" + d).draggable('enable');
        $("#draggable" + d).find('p').text(strDrags[d]);
        $("#droppable1" + d).removeClass("ui-state-highlight");
        $("#droppable" + d).find('p').text(answers[d]);
 
    }
 
}
 
function NextQuiz() {
   
// Aquí pondremos el siguiente ejercicio javascript
           for (var d = 0; d < strDrags.length; d++) {
                                $("#draggable" + d).remove();
                                $("#droppable" + d).remove();
                            }
    currentXml++;
    //alerta(currentXml);
    if (currentXml <= xml.length) {
        xmlDoc = $.parseXML(xml[currentXml]);
        $xml = $(xmlDoc);
        var type = $xml.find("type").text();
       // alerta"the type is" + type);
        if (type === "dragndrop") {
            DragNDrop();
        } else if (type === "multipleC") {
            MultipleChoice();
        }
 
    } else {
        $("#endOfQuiz").dialog("open");
    }
 
}
 
function MultipleChoice() {
    alert("here we'll do multiple choice");
     $("#drops").css("display","none");
    $("#drags").css("display","none");
     var ques = $xml.find("question").text();
      $("#question").append("<div id='ques" +
                "' class ='title'> <p>" +  ques + "</p></div>");
   // alerta(ques);
    var choices = $xml.find("choice").text();
     alert(ans);
    var strCho = choices.split(",");
    alert(strAns);
     for (var a = 0; a < strCho.length; a++) {
            $("#answers").append("<input type='radio' class=quizbtn name='radio" + a +"'><label for='radio'" + a + "'>" + strCho[a] + "</label>");
         
         alert(strAns[a]);
     }
     $("#answers").append("<input type='submit' value='SUBMIT'>");
 
     $(function() {
 
    $( "#radio" ).buttonset();
          $( "input[type=submit]")
 
      .button()
 
      .click(function( event ) {
 
        alert("click here");
 
      });
 
 
 
     });
  //   <input type="checkbox" id="check1"><label for="check1">B</label>
}
 
 
// Aquí es donde vamos a seperate a cabo las funciones de concursos para que sea más fácil de leer.
function DragNDrop() {
    hasAll = 0;
         $("#drops").css("display","block");
    $("#drags").css("display","block");
 
    for (var d = 0; d < strDrags.length; d++) {
        $("#draggable" + d).remove();
        $("#droppable" + d).remove();
    }
 
    if (currentXml < xml.length) {
        xmlDoc = $.parseXML(xml[currentXml]),
        $xml = $(xmlDoc),
        $drags = $xml.find("drags"),
        $drops = $xml.find("drops");
        var bTest;
        if ($xml.find("test").text() === "true") {
            bTest = true;
        } else {
            bTest = false;
        }
 
        strDrags = $drags.text().split(",");
        strDrops = $drops.text().split(",");
 
        questions = [];
        answers = [];
 
        for (var s = 0; s < strDrags.length; s++) {
            questions.push(String(String(strDrags[s])));
            answers.push(String(String(strDrops[s])));
        }
        //alerta(questions.indexOf(String(strDrags[1])));
        strDrags = shuffle(strDrags);
        for (var i = 0; i < strDrags.length; i++) {
            //alerta(strDrags[i]);
            // alerta(strDrops[i]);
            $("#drags").append("<div id='draggable" + i +
                "' class ='drag'> <p>" + String(strDrags[i]) + "</p></div>");
            $("#drops").append("<div id='droppable" + i +
                "' class ='drop'> <p>" + String(strDrops[i]) + "</p></div>");
 
        }
 
        $(function () {
 
            $(".drag").draggable({
                helper: "clone"
            });
            $(".drop").droppable({
                drop: function (event, ui) {
                    var tText = $(this).find('p').text();
                    var myQues = String($(this).find('p').text());
                    //alert(myQues + answers.indexOf(myQues));
                    var myAns = String($(ui.draggable).find('p').text());
                    // alert(myAns + questions.indexOf(myAns));
                    //alert(questions);
                    if (answers.indexOf(myQues) === questions.indexOf(myAns)) {
                        hasAll++;
                        options = {
                            to: {
                                width: 200,
                                height: 60
                            }
                        };
                        //alert("correct");
                        // $(this).addClass("ui-state-highlight");
                        var apendEl = $(this).find('p');
                        $(this).find('p').text(tText + " = " + ui.draggable.text());
                        if (bTest) {
                            ui.draggable.css("background-color", "#66FF99");
                        }
                        // $( "<p></p>" ).text( ui.draggable.text() ).appendTo(apendEl );
                        ui.draggable.draggable('disable');
                        if (hasAll === questions.length) {
                            // alerta("end of quiz");
                            $("#dialog").dialog("open");
                     
                        }
                    } else {
                        if (bTest) {
                            hasAll++;
                            ui.draggable.draggable('disable');
                            ui.draggable.css("background-color", "#FF6666");
                        }
                        if (hasAll === questions.length) {
                            // alerta("end of quiz");
                           
                            $("#dialog").dialog("open");
                        }
                    }
                }
            });
        });
    } else {
        $("#endOfQuiz").dialog("open");
    }
}
 
function ResetAll() {
    currentXml = -1;
    NextQuiz();
 
}
 
 
 
 
 
</script>