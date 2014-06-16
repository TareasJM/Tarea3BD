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
	
				<li><a href="Noticias.php">Atrás<a/></li>

	</div>

	<div id="content" style="color:black">


		<ul style="text-align:center"> 
			<h1>Crear Noticia</h1>
			<form action="../php/Areas/AgregarArea.php" method="POST" onsubmit="validateForm()" >  
				<li>Titular:<br><input type="text" name="titular" id="titular" /></li> 
				<li>Contenido:<br><textarea style=" margin:auto; resize:none; width:50%; height:100px; border: 1px solid blue; position:static" type="text" name="contenido" id="contenido" ></textarea></li> 
				<li>Área:<br><input type="text" name="area" id="area" /></li>
				<li><input value="Agregar" class="btn btn-info" type="submit"/></li>
		</ul>

	</div>
		  
</body>  
</html> 