<?php
$tile = 'Postulación';
$content ='<h2>Ingrese Información de postulación</h2>  
<ul>  
	<form action="ingresarPostulacion.php" method="POST" >  
		<li>Nombre:<br><input type="text" name="nombre" /></li> 
		<li>RUT:<br><input type="text" name="rut" /></li> 
		<li>ROL:<br><input type="text" name="rol" /></li> 
		<li>Carrera:<br><input type="number" name="carrera" /></li> 
		<li>Correo:<br><input type="text" name="correo" /></li> 
		<li>Teléfono:<br><input type="text" name="telefono" /></li> 
		<li>Contraseña:<br><input type="password" name="contrasena" /></li> 
		<li>Reapita contraseña:<br><input type="password" name="contrasena2" /></li> 
		<li><input type="submit" /></li>  
	</form>  
</ul>';
?>

<?php include("master.php"); ?>


<?php  
	if (is_null($_POST[numero])) {
		echo "ERROR";
	}
	$db = pg_connect("host=localhost port=5432 dbname=tarea user=tarea password=tarea");  
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
	echo $result;   
?> 