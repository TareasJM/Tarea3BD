
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
			<h1>Agregar Área</h1>
			<form action="../php/agregarArea.php" method="POST" onsubmit="validateForm()" >  
				<li>Nombre:<br><input type="text" name="nombre" id="nombre" /></li> 
				<li>N°Colaboradores:<br><input type="text" name="ncol" id="ncol" /></li> 
				<li>Horario:<br><input type="text" name="horario" id="horario" /></li>
				<li><input value="Agregar" class="btn btn-info" type="submit"/></li>
		</ul>
	</div>
		  
</body>  
</html> 