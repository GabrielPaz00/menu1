<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="favicon.png">
	<link rel="stylesheet" type="text/css" href="header.css">
	<link rel="stylesheet" type="text/css" href="sign_up.css">
	<title>Regístrate</title>
</head>
<body>

	<header>
	<!--Menú de navegación-->
	<nav class="nav">
		<input type="checkbox" id="nav_checkbox" class="checkbox" >
		<label  for="nav_checkbox" class="nav_toggle">
		<!--Cerrar-->
		<img src="https://img.icons8.com/ios-glyphs/48/000000/delete-sign.png" class="close"/>
		<!--Expandir-->
		<img src="menu-hamburguesa.png"class="menu"/>
		</label>
		<ul class="nav_menu">
			<li class="logo">
				<img src="icono.svg">
			</li>
			<div class="titulo">
				<h1>Regístrate</h1>
			</div>
			<li><a href="index.html">Inicio</a></li>
			<li><a href="login.html">Iniciar sesión</a></li>
			<li><a href="sign_up.html">Regístrar</a></li>
		</ul>
	</nav>	
	</header>
	<br/><br/><br/><br/>
	<form class="form" action="conection.php" method="post">
		<div class="personal">
		<h2>Datos</h2>
		<br/>	
		<label for="nombre">Nombre</label>
		<input type="text" name="nombre" id="nombre">
		<label for="apellido">Apellido</label>
		<input type="text" name="apellido" id="apellido">
		<label for="age">Edad &nbsp; &nbsp;</label>
		<input type="number" id="edad"name="age" maxlength="2" min="14" max="24"> <br>
		<br/>
		<br/>
		</div>
		<div class="correo">
		<h2>Correo y contraseña</h2>
		<br/>
		<label for="email">Ingresa tu correo</label>
		<div class="log">
			<input type="email" name="email" id="email" placeholder="Correo"> 
		</div>
		<!--Placeholder muestra un texto predeterminado, dicho se borra al ingresar un cárcter-->
		<br/>
		<label for="password">Ingresa tu contraseña</label>
		<div class="log">
			<input type="password" name="password" id="password" placeholder="Contraseña" maxlength="8">
		</div>
		</div>
		<br/>
		<br/>

		<h2>Información academica</h2>
		<br/>
		<label for="Semestre">Selecciona tu semestre</label>
		<select id="semestre" name="semestre">
			<option value="S1-S2">Primero / Segundo</option>
			<option value="S3-S4">Tercero / Cuarto</option>
			<option value="S5-S6">Quinto / Sexto</option>
		</select>
		<br/><br/>
		<input type="reset" name="reset" value="Reset"> 
		<!--Restablece los campos a sus valores predetermidados-->
		&nbsp; &nbsp;
		<button type="submit" id="enviar" name="enviar" onclick="mostrar()">Enviar</button>
		<!--Botón usado para enviar el formulario-->
		<br/>
	</form>
	<br/><br/>
<script>
	function mostrar() {
		var enviar = document.getElementById('enviar');
		var edad =  document.getElementById('edad').value;
		var nombre = document.getElementById('nombre').value;
		var apellido = document.getElementById('apellido').value;
		var email = document.getElementById('email').value;
		var password = document.getElementById('password').value;
		if (!edad || !nombre || !apellido || !email || !password) {
			alert("Llena todos los campos del formulario");
			enviar.type = "button";
		}
		else {
			enviar.type = "submit";
		}
	}
</script>
</body>
</html>