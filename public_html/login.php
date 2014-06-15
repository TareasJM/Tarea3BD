
<?php

	include("../php/Alumno.php");
	$alumno = new Alumno();
	$roles = $alumno->getRolesAlumnos();
	$passes = $alumno->getContrasenasAlumnos();

?>

<!DOCTYPE html>  
<head>  
	<title><?php echo $title; ?></title>  
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   
	<link rel="stylesheet" type="text/css" href="css/master.css">
	<?php echo $css; ?>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" language="javascript">
	    	function validateForm() {
	        var roles = new Array();
	        var passes = new Array();
		    <?php
		      for ($i = 0; $i < count($roles); $i++){
		    ?>
		        roles[<?php echo $i ?>] = "<?php echo $roles[$i]; ?>";
		    <?php
		      }
		    ?>
		    <?php
		      for ($i = 0; $i < count($passes); $i++){
		    ?>
		        passes[<?php echo $i ?>] = "<?php echo $passes[$i]; ?>";
		    <?php
		      }
		    ?>

		    var User = document.getElementById("rol").value;
            var Pass = document.getElementById("contrasena").value;
            var i = 0;

        	if(i == roles.length)
            {
                alert("Error: No Existe Usuario");
                return false;
            };
            
            while(User != roles[i])
            {
                
                if(i == roles.length-1)
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
            };
            return true;
            
            } 
	    </script>
</head>  
<body>

	<div id="header">
		<?php echo $header; ?>
		
		<div id="contentHeader">
			<div id="BH">
				<ul>
					<li><a href="ingresarPostulacion.php">Postular<a/><li>
					<li><a href="login.php">Login<a/><li>
					<li><a href="login.php">Logout<a/><li>
				</ul>
			</div>
		</div>
	</div>

	<div id="sidebar">
	
				<li><a href="ingresarPostulacion.php">Postular<a/><li>
				<li><a href="login.php">Login<a/><li>
				<li><a href="login.php">Logout<a/><li>
	</div>

	<div id="content">
		<ul>  
			<form action="../php/login.php" method="POST" onsubmit="validateForm()">  
				<li>ROL:<br><input type="text" name="rol" id="rol" /></li>
				<li>Contraseña:<br><input type="password" name="contrasena" id="contrasena" /></li> 
				<li><input type="submit" /></li>  
			</form>  
		</ul>
		
	</div>
		
</body>  
</html> 