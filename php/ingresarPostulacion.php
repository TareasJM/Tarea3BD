<?php  
	include("bd.php");
	$query = "INSERT INTO alumno VALUES ('$_POST[rol]',
										'$_POST[carrera]',
										'$_POST[rut]',
										'$_POST[nombre]',
										'$_POST[correo]',
										'$_POST[contrasena]',
										'$_POST[telefono]',
										NULL)";

	$result = pg_query($query);
?> 