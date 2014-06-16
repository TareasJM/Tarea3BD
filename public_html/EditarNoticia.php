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
	
				<li><a href="ingresarPostulacion.php">Agregar Área<a/><li>

	</div>

	<div id="content" style="color:black">
		<ul style="text-align:center"> 


			<h1>Editar Noticia</h1>
			<form action="../php/Noticias/GuardarEditado.php" method="POST" onsubmit="validateForm()" >  
				<li><input type="hidden" name="id_noticia" id="id_noticia" value="<?= $_SESSION['noticia'][0] ?>"/> </li> 
				<li>Titular:<br><input type="text" name="titular" id="titular" value="<?= $_SESSION['noticia'][3] ?>"/></li> 
				<li>Contenido:<br><textarea style=" margin:auto; resize:none; width:50%; height:100px; border: 1px solid blue; position:static" type="text" name="contenido" id="contenido" ><?= $_SESSION['noticia'][4] ?></textarea></li> 
				<li><input value="Guardar" class="btn btn-info" type="submit"/></li>
			</form>
		</ul>
	</div>
		  
</body>  
</html> 