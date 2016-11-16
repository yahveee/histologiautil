<?php
include './misFunciones.php';//siempre debe incluirse para tratar con php-BBDD
//ahora sesion_start() con la sesion que iniciamos en login
if(!isset($_SESSION) ){session_start();}
//leo el valor que guarde en la variable Nombre
$nombre = $_SESSION['Nombre'];

$mysqli = conectaBBDD();//siempre debe incluirse para tratar con php-BBDD
//hago la consulta a la BBDD
$consulta_usuarios = $mysqli -> query ("select * from usuario");//Tambien debe incluirse simpre ya que sera la accion a traves cde php para tratar la bbdd
//saco el numero de usuarios que hay en la bbdd
$num_usuarios = $consulta_usuarios -> num_rows;
//monto un bucle for para cargar en el array los resultados de la query
for ($i = 0; $i < $num_usuarios; $i++){
    $r = $consulta_usuarios -> fetch_array();
    $usuarios[$i][0] = $r['DNI'];
    $usuarios[$i][1] = $r['Nombre'];
    $usuarios[$i][2] = $r['Apellido'];
    $usuarios[$i][3] = $r['Email'];
}
//ahora voy a usar los datos en un ejemplo
?>
<br>
<br>
<br>
<table class="table  table-condensed table-bordered" style="background-color: white;">
    <?php
    for ($i = 0; $i < $num_usuarios; $i++){
        echo '<tr>';
        echo '<td>'.$usuarios[$i][1].'</td>';
        echo '<td>'.$usuarios[$i][2].'</td>';
        echo '<td>'.$usuarios[$i][3].'</td>';
        echo '<td><img src="imagenes/'.$usuarios[$i][0].'.jpg" style="width:80px"></td>';
        echo '</tr>';
    }
    ?>
</table>
</div>


    <script>
        $(".nav a").on("click", function(){
            $(".nav").find(".active").removeClass("active");
            $(this).parent().addClass("active");
         });
    </script>
