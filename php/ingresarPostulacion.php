<?php
	
	function InsertarAlumno($rol,$carrera,$rut,$nombre,$correo,$contrasena,$telefono)
	{
	include("bd.php");
	$query = "INSERT INTO alumno VALUES ('".$rol."',
										 ".$carrera.",
										'".$rut."',
										'".$nombre."',
										'".$correo."',
										'".$contrasena."',
										'".$telefono."',
										NULL)";
	$result = pg_query($query);
	}
?> 