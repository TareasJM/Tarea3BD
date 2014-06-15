<?php
	include("../php/getCarreras.php");
	include("../php/getAlumnos.php");
	$script = '
		<script type="text/javascript"  language="javascript">
	        function validateForm() {
	            var nombre = document.getElementById("nombre").value;
				var rut = document.getElementById("rut").value;
				var rol = document.getElementById("rol").value;
				var carrera = document.getElementById("carrera").value;
				var correo = document.getElementById("correo").value;
				var telefono = document.getElementById("telefono").value;
				var contrasena = document.getElementById("contrasena").value;
				var contrasena2 = document.getElementById("contrasena2").value;
				var postulacion1 = document.getElementById("postulacion1").value;
				var postulacion2 = document.getElementById("postulacion2").value;
				var postulacion3 = document.getElementById("postulacion3").value;
	            
	            if (nombre.length == 0) {
	                alert("Error: Ingrese nombre");
	                return false;
	            };
	            if (rut.length == 0) {
	                alert("Error: Ingrese rut");
	                return false;
	            };
	            if (rol.length == 0) {
	                alert("Error: Ingrese rol");
	                return false;
	            };
	            if (correo.length == 0) {
	                alert("Error: Ingrese correo");
	                return false;
	            };
	            if (telefono.length == 0) {
	                alert("Error: Ingrese telefono");
	                return false;
	            };
	            if (contrasena.length == 0) {
	                alert("Error: Ingrese contraseña");
	                return false;
	            };
	            if (contrasena != contrasena2) {
	                alert("Error: Contraseñas no coinciden");
	                return false;
	            };
	            if (postulacion == 0) {
	                alert("Error: Una postulacion mínimo");
	                return false;
	            };
	            
	            return true; // return false to cancel form action
	        }
	    </script>
	';
	$title = 'Ingrese Información de postulación';
	$sidebar = $sidebar.'
				<li><a href="ingresarPostulacion.php">Postular<a/><li>
				<li><a href="login.php">Login<a/><li>
				<li><a href="login.php">Logout<a/><li>';
	$content ='
		 
		<ul>  
			<form action="../php/ingresarPostulacion.php" method="POST" onsubmit="validateForm()" >  
				<li>Nombre:<br><input type="text" name="nombre" id="nombre" /></li> 
				<li>RUT:<br><input type="text" name="rut" id="rut" /></li> 
				<li>ROL:<br><input type="text" name="rol" id="rol" /></li>
				<li>Carrera:<br><select name="carrera" id="carrera" >'; 
	
	foreach ($carreras as $carrera) {
	    $content = $content . '<option value="' . $carrera[0] . '">' . $carrera[1] . '</option>';
	}
	$content = $content.'</select></li>
				<li>Correo:<br><input type="text" name="correo" id="correo" /></li> 
				<li>Teléfono:<br><input type="text" name="telefono" id="telefono" /></li> 
				<li>Contraseña:<br><input type="password" name="contrasena" id="contrasena" /></li> 
				<li>Reapita contraseña:<br><input type="password" name="contrasena2" id="contrasena2" /></li> 
				<li>Postulación 1:<br><input type="number" name="postulacion1" id="postulacion1" /></li> 
				<li>Postulación 2:<br><input type="number" name="postulacion2" id="postulacion2" /></li> 
				<li>Postulación 3:<br><input type="number" name="postulacion3" id="postulacion3" /></li> 
				<li><input type="submit" /></li>  
			</form>  
		</ul>
	';
	 
	include("master.php");  
?> 