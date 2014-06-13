<?php
	$title = 'Login';
	$title2 = '<h2>Portal Alumno</h2> ';
	$content ='
		<ul>  
			<form action="login.php" method="POST" >  

				<li>ROL:<br><input type="text" name="rol" id="rol" /></li>
				<li>Contraseña:<br><input type="password" name="contrasena" id="contrasena" /></li> 
				<li><input type="submit" /></li>  
			</form>  
		</ul>
	';
	 
	include("master.php");  
    include("../php/login.php");
    if (login($_POST[rol], $_POST[contrasena])) {
        header("Location: http://yes.com");
        die();
    }
    else{
        header("Location: http://no.com");
        die();
    }
?> 