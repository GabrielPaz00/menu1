<?php
	$conectar = mysqli_connect('localhost', 'root', '', 'prueba1') or die(mysql_error($mysqli));
	insertar ($conectar);
	function insertar ($conectar) {
		$email = $_POST['email'];
		$password = $_POST['password'];
		$age = $_POST['age'];
		$name = $_POST['nombre'];
		$last_name = $_POST['apellido'];
		$semestre = $_POST['semestre'];
		$consulta = "INSERT INTO usuarios (id, email, password, age, nombre, apellido, semestre)
		VALUES ('Null' , '$email', '$password', '$age', '$name', '$last_name', '$semestre')";
		mysqli_query($conectar, $consulta);
		mysqli_close($conectar);
		header("Location: principal.html");
	}
	
 ?>