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
 
	include("master.php");  
	include("../php/ingresarPostulacion.php");
?> 