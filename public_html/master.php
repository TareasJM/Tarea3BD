
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
		<div id="headerTitle"><?php echo $title; ?></div>
		<?php echo $header; ?>
		<a href="login.php">login<a/>
	</div>

	<div id="sidebar">
		<?php echo $sidebar; ?>
		
	</div>

	<div id="content">
		<center><?php echo $title2; ?></center>
		<?php echo $content; ?>
<<<<<<< HEAD
=======
		<?php include("../php/getAlumnos.php");?> 
		</h1><?php $hola = ObtenerRolesAlumnos(); ?></h1>
		</h1><?php echo "ss" ?></h1>
		</h1><?php echo $hola[0]; ?></h1>
		</h1><?php echo "aa" ?></h1>
		<h1>HOLA:</h1><input type="text" name="postulacion3" id="postulacion3" value="<?php echo htmlspecialchars(Test()); ?>"/>
>>>>>>> e497f599746065c0edb8588b1b54b485e1f83555
	</div>
		
</body>  
</html> 