<?php
	include("../php/getAlumnos.php");
	$title = 'Postulación';
	$script = '
		<script type="text/javascript"  language="javascript">
	     function validateForm() {

            var names = <?php echo ObtenerRolesAlumnos(); ?>; 
            var passes = <?php echo ObtenerContrasenasAlumnos(); ?>; 
            var Rol = document.getElementById("rol").value;
            var Contrasena = document.getElementById("contrasena").value;
            var i = 0;
            if(i == names.length)
            {
                alert("Error: No Existe Usuario");
                return false;
            }
            while(User != names[i])
            {
                
                if(i == names.length-1)
                {
                    alert("Error: No Existe Usuario");
                    return false;
                };
                i++;
            };

            if(Pass != passes[i])
            {
                alert("Error: Contraseña No Coincide");
                return false;
            }
            return true;
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
	
?> 