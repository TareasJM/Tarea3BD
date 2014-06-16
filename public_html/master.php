
<?php

	session_start();
?>

<!DOCTYPE html>  
<head>  
	<title><?php echo $title; ?></title>  
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   
	<link rel="stylesheet" type="text/css" href="css/master.css">
    <!-- <link href="css/bootstrap.css" rel="stylesheet" media="screen"> -->
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
				
				<?php if(!isset($_SESSION['alumno'])){?>
				<li><a href="ingresarPostulacion.php">Postular<a/><li>
				<li><a href="login.php">Login<a/><li>
				<?php }?>
				<?php if(isset($_SESSION['alumno'])){?>
				<li><a><?=$_SESSION['alumno'][3]?></a></li>
				<li><a href="../php/logout.php">Logout<a/><li>
				<?php }?>
			</ul>
			</div>
		</div>
	</div>

	<div id="sidebar">
				<?php echo $sidebar; ?>
				<?php
				if($_SESSION['tipo'] == 1){ ?>
				<li><a href="ingresarPostulacion.php">MisDatos<a/></li>
				<li><a href="areas.php">Áreas<a/></li>
				<li><a href="coAreas.php">Coordinadores de Área<a/></li>
				<li><a href="Noticias.php">Noticias<a/></li>
				<li><a href="VerPostulantes.php">Postulantes<a/></li>
				<li><a href="login.php">Colaboradores Seleccionado<a/></li>
				<?php } 
				else if($_SESSION['tipo'] == 2)
				{?>
				<li><a href="ingresarPostulacion.php">MisDatos<a/></li>
				<li><a href="Noticias.php">Noticias<a/></li>
				<li><a href="VerPostulantes.php">Postulantes<a/></li>
				<li><a href="login.php">Colaboradores Seleccionado<a/></li>
				<?php }?>

	</div>

	<div id="content">
		<center><h2><?php echo $title; ?></h2> </center>
		<?php echo $content; ?>
		
	</div>
		
</body>  
</html> 