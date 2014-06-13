<?php
	$title = 'Login';
	$content ='
		<ul>  
			<form action="../php/login.php" method="POST" >  
				<li>ROL:<br><input type="text" name="rol" id="rol" /></li>
				<li>Contraseña:<br><input type="password" name="contrasena" id="contrasena" /></li> 
				<li><input type="submit" /></li>  
			</form>  
		</ul>
	';
	include("master.php");  
?> 