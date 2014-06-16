<?php
	include("../php/getCarreras.php");
	include("../php/getAlumnos.php");
	include("../php/Area.php");
	$area = new Area();
	$areas = $area->getAreas();
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
	$sidebar = '<li><a href="coAreas.php">Atrás</a></li>';
	$content ='
		 
		<ul>  
			<form action="../php/CoAreas/AgregarCoArea.php" method="POST" onsubmit="validateForm()" >  
				<li>Nombre:<br><input type="text" name="nombre" id="nombre" /></li> 
				<li>RUT:<br><input type="text" name="rut" id="rut" /></li> 
				<li>ROL:<br><input type="text" name="rol" id="rol" /></li>
				<li>Área:<br><select name="area" id="area" >';
	foreach ($areas as $area) {
	    $content = $content . '<option value="' . $area[0] . '">' . $area[1] . '</option>';
	}
	$content = $content.'</select></li><li>Carrera:<br><select name="carrera" id="carrera" >'; 
	
	foreach ($carreras as $carrera) {
	    $content = $content . '<option value="' . $carrera[0] . '">' . $carrera[1] . '</option>';
	}
	$content = $content.'</select></li>
				<li>Correo:<br><input type="text" name="correo" id="correo" /></li> 
				<li>Teléfono:<br><input type="text" name="telefono" id="telefono" /></li> 
				<li>Contraseña:<br><input type="password" name="contrasena" id="contrasena" /></li> 
				<li><input value="Agregar" type="submit" /></li>  
			</form>  
		</ul>
	';
	 
	include("master.php");  
?> 