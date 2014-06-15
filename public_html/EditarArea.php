<?php
session_start();
?>
<!DOCTYPE html>  
<head>  
	<title><?php echo $title; ?></title>  
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   
	<link rel="stylesheet" type="text/css" href="css/master.css">
	<link href="css/bootstrap.css" rel="stylesheet" media="screen">
	<?php echo $css; ?>
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
	
				<li><a href="ingresarPostulacion.php">Agregar Área<a/><li>

	</div>

	<div id="content" style="color:black">
		<ul style="text-align:center"> 
			<h1>Editar Área</h1>
			<form action="../php/Areas/GuardarEditado.php" method="POST" >
				<li><input type="hidden" name="id" id="id" value="<?= $_SESSION['area'][0] ?>"/> </li> 
				<li>Nombre:<br><input type="text" name="nombre" id="nombre" placeholder="<?= $_SESSION['area'][1] ?>"/>
				</li> 
				<li>N°Colaboradores:<br><input type="text" name="ncol" id="ncol" placeholder="<?= $_SESSION['area'][2] ?>"/>
				</li> 
				<li>Horario:<br><input type="text" name="horario" id="horario" placeholder="<?= $_SESSION['area'][3] ?>"/>
				</li>
				<li><input value="Editar" class="btn btn-info" type="submit"/></li>
		</ul>
	</div>
		  
</body>  
</html> 