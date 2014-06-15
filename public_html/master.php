
<?php
	if (is_null($title)) {
		$title = "Titulo nulo";
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
				<?php
				if($_SESSION['tipo'] == 1){ ?>
				<li><a href="ingresarPostulacion.php">MisDatos<a/><li>
				<li><a href="login.php">Áreas<a/><li>
				<li><a href="login.php">Coordinaodres de Área<a/><li>
				<li><a href="login.php">Noticias<a/><li>
				<li><a href="login.php">Postulantes<a/><li>
				<li><a href="login.php">Colaboradores<a/><li>
				<li><a href="login.php">Seleccionados<a/><li>

				<?php } ?>
				

	</div>

	<div id="content">
		<center><h2><?php echo $title; ?></h2> </center>
		<?php echo $content; ?>
		
	</div>
		
</body>  
</html> 