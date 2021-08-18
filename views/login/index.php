<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>INICIO DE SESION</title>
	<link rel="stylesheet" type="text/css" href="<?php echo constant('URL') ?>public/css/login.css">
	<!--Sweet Alert-->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<!--Ajax-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
</head>
<body>

	<br><br><br>	
	<div class="container">
		<div class="titulo">
			<h1>Iniciar <span>Sesion</span></h1>
		</div>
		<div class="form_login">		
			<p><label>USUARIO: </label><br><br><input type="text" id="user" placeholder="Ingrese su Usuario" required="" class="input" ></p>
			<p><label>CONTRASEÑA:  </label><br><br><input type="password" id="pass" placeholder="Ingrese su Contraseña" required="" class="input"></p>
			<button class="btn_submit" onclick="validar()">Iniciar Sesion</button>
		</div>
	</div>		

	<script src="public/js/login.js"></script>
	
</body>
</html>