<?php
//ahora sesion_start() con la sesion que iniciamos en login
if(!isset($_SESSION) ){session_start();}
//leo el valor que guarde en la variable Nombre
$nombre = $_SESSION['Nombre'];
?>
/* Craeted refering to LittleSnippets.net Pen: http://codepen.io/littlesnippets/pen/adLELd */
<style>
.frame {
	text-align: center;	
	position: relative;
	cursor: pointer;	
	perspective: 500;
        margin-top: 100px;
        margin-left: 140px;
}
.frame img {
	width: 300px;
	height: 300px;
}
.frame .details {
	width: 100%;
	height: 80%;	
	padding: 0% 8%;
	position: absolute;
	content: "";
	top: 50%;
	left: 55%;
	transform: translate(-50%, -50%) rotateY(90deg);
	transform-origin: 50%;
	background: rgba(255,255,255,0.9);	
	opacity: 0;
	transition: all 0.4s ease-in;
	
}
.frame:hover .details {
	transform: translate(-50%, -50%) rotateY(0deg);
	opacity: 1;
}
</style>
<br>
<br>
		<div class = "col-xs-6">
                    <div class="frame" style="width: 50%;">
                    <img src ="https://pbs.twimg.com/profile_images/378800000601617732/9e87878ffdd67333ac8b81f9da22696a_400x400.jpeg">
			<div class = "details">
				<h1>Lorem</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam lorem nunc, sollicitudin a nisi sodales, imperdiet dignissim enim. Nam sapien quam</p>
			</div>
                    </div>
		</div>
                <div class = "col-xs-6">
                    <div class="frame" style="width: 50%;">
                    <img src ="https://pbs.twimg.com/profile_images/378800000601617732/9e87878ffdd67333ac8b81f9da22696a_400x400.jpeg">
			<div class = "details">
				<h1>Lorem</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam lorem nunc, sollicitudin a nisi sodales, imperdiet dignissim enim. Nam sapien quam</p>
			</div>
                    </div>
		</div>
<br>
<br>
                <div class = "col-xs-6">
                    <div class="frame" style="width: 50%;">
                    <img src ="https://pbs.twimg.com/profile_images/378800000601617732/9e87878ffdd67333ac8b81f9da22696a_400x400.jpeg">
			<div class = "details">
				<h1>Lorem</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam lorem nunc, sollicitudin a nisi sodales, imperdiet dignissim enim. Nam sapien quam</p>
			</div>
                    </div>
		</div>
                <div class = "col-xs-6">
                    <div class="frame" style="width: 50%;">
                    <img src ="https://pbs.twimg.com/profile_images/378800000601617732/9e87878ffdd67333ac8b81f9da22696a_400x400.jpeg">
			<div class = "details">
				<h1>Lorem</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam lorem nunc, sollicitudin a nisi sodales, imperdiet dignissim enim. Nam sapien quam</p>
			</div>
                    </div>
		</div>
		