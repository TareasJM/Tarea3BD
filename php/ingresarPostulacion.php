<?php
	
	function InsertarAlumno($rol,$carrera,$rut,$nombre,$correo,$contrasena,$telefono){
		include("bd.php");
		$query = "INSERT INTO alumno VALUES ('".$rol."',
											 ".$carrera.",
											'".$rut."',
											'".$nombre."',
											'".$correo."',
											'".$contrasena."',
											'".$telefono."',
											NULL)";
		return pg_query($query);
	}

	echo InsertarAlumno($_POST[rol],$_POST[carrera],$_POST[rut],$_POST[nombre],$_POST[correo],$_POST[contrasena],$_POST[telefono]);
	echo '<a href="../public_html/index.php">inicio<a/>'

?> 