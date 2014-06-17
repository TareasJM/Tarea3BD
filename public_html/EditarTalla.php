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
	
				<li><a href="VerColaboradores.php">Atrás<a/></li>

	</div>

	<div id="content" style="color:black">
		<ul style="text-align:center"> 


			<h1>Editar Talla</h1>
			<form action="../php/Talla/GuardarEditado.php" method="POST" onsubmit="validateForm()" >  
				<li><input type="hidden" name="rol_colaborador" id="rol_colaborador" value="<?= $_SESSION['rol_colaborador_talla']?>"/> </li>
				<li>Talla:<br><input type="text" name="talla" id="talla"/></li> 
				<li><input value="Guardar" class="btn btn-info" type="submit"/></li>
			</form>
		</ul>
	</div>
		  
</body>  
</html> 