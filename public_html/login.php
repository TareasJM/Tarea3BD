<?php
	include("../php/getCarreras.php");

	$title = 'Postulación';
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
	$title2 = '<h2>Portal Alumno</h2> ';
	$content ='
		 
		<ul>  
			<form action="ingresarPostulacion.php" method="POST" onsubmit="validateForm()" >  

				<li>ROL:<br><input type="text" name="rol" id="rol" /></li>
				<li>Contraseña:<br><input type="password" name="contrasena" id="contrasena" /></li> 
				<li><input type="submit" /></li>  
			</form>  
		</ul>
	';
	 
	include("master.php");  
	include("../php/getAlumnos.php");
	InsertarAlumno($_POST[rol],$_POST[carrera],$_POST[rut],$_POST[nombre],$_POST[correo],$_POST[contrasena],$_POST[telefono]);
?> 