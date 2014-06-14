
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
?>

<!DOCTYPE html>  
<head>  
	<title><?php echo $title; ?></title>  
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   
	<link rel="stylesheet" type="text/css" href="css/master.css">
	<?php echo $css; ?>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<?php echo $script; ?>
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
		<center><h2><?php echo $title; ?></h2> </center>
		<?php echo $content; ?>
		<?php
		include("../php/getAlumnos.php");
		$nombres = ObtenerRolesAlumnos();
		$hola = array();
		foreach($nombres as $roles)
		{
			echo "rol: $roles[6]-";
			$hola[] = $roles;
		}
		echo "hola: $hola[1]";
		$con = ObtenerContrasenasAlumnos();
		for($i=0;$i<sizeof($con);$i++)
		{
			echo "pass : $con[$i]";
		}
		?>
	</div>
		
</body>  
</html> 