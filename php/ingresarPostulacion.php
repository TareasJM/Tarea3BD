<?php  
	include("bd.php");  
	echo "se inportó";
	$query = "INSERT INTO alumno VALUES ('$_POST[rol]',
										'$_POST[carrera]',
										'$_POST[rut]',
										'$_POST[nombre]',
										'$_POST[correo]',
										'$_POST[contrasena]',
										'$_POST[telefono]',
										NULL)";

	$result = pg_query($query);
	// $query = "INSERT INTO alumno VALUES ('$_POST[numero]')";
	// $result = pg_query($query);
	if (is_null($result)) {
		echo "ingresado";
	}
	echo $result;   
?> 