
<?php
	if (is_null($title)) {
		$title = "Titulo nulo";
	}

	if (is_null($header)) {
		$header = "header nulo";
	}

	if (is_null($content)) {
		$content = "Contenido nulo";
	}

	if (is_null($sidebar)) {
		$sidebar = "Sidebar nulo";
	}
	include("../php/getAlumnos.php");
	$roles = ObtenerRolesAlumnos();
	$passes = ObtenerContrasenasAlumnos();

?>

<!DOCTYPE html>  
<head>  
	<title><?php echo $title; ?></title>  
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   
	<link rel="stylesheet" type="text/css" href="css/master.css">
	<?php echo $css; ?>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script type="text/javascript">
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
             for(var i=0; i<roles.length; i++){
		      alert(roles[i]+"<br />");
		    }
            if(i == roles.length)
            {
                alert("Error: No Existe Usuario");
                return false;
            }
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
            }
            return true;
            } 
           
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
		<?php echo $sidebar; ?>
		
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