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
					<?php if(!isset($_SESSION['alumno'])){?>
					<li><a href="ingresarPostulacion.php">Postular<a/><li>
					<li><a href="../php/login.php">Login<a/><li>
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
	
				<li><a href="ingresarPostulacion.php">Agregar Área<a/></li>
				<li><a href="areas.php">Átras<a/></li>

	</div>

	<div id="content" style="color:black">
		<ul style="text-align:center"> 


			<h1>Editar Área</h1>
			<form action="../php/Areas/GuardarEditado.php" method="POST" >
				<li><input style="text-align:center" type="hidden" name="id_area" id="id_area" value="<?= $_SESSION['area'][0] ?>"/> </li> 
				<li>Nombre:<br><input style="text-align:center" type="text" name="nombre" id="nombre" value="<?= $_SESSION['area'][1] ?>"/>
				</li> 
				<li>N°Colaboradores:<br><input style="text-align:center" type="text" name="ncol" id="ncol" value="<?= $_SESSION['area'][2] ?>" readonly/>
				</li> 
				<li>Horario:<br><input style="text-align:center" type="text" name="horario" id="horario" value="<?= $_SESSION['area'][3] ?>"/>
				</li>
				<li><input value="Editar" class="btn btn-info" type="submit"/></li>
		</ul>
	</div>
		  
</body>  
</html> 