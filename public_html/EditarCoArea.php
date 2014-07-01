<?php
session_start();
include("../php/Alumno.php");
$alumno = new Alumno();
$al = $alumno->getAlumno($_SESSION['rol']);
$carrera = $alumno->getCarrera($al[0][1]);


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
	
				<li><a href="index.php">Atrás<a/></li>

	</div>

	<div id="content" style="color:black">
		<ul style="text-align:center"> 


			<h1 style="color:black">Datos de <?=$al[0][3]?></h1>
			<form action="../php/CoAreas/GuardarEditado.php" method="POST" onsubmit="validateForm()" >  
				<li style="color:white">Nombre:<br><input readonly style="text-align:center" type="text" name="nombre" id="nombre" value="<?=$al[0][3]?>" /></li> 
				<li style="color:white">RUT:<br><input readonly style="text-align:center" type="text" name="rut" id="rut" value="<?=$al[0][2]?>" /></li> 
				<li style="color:white">ROL:<br><input readonly style="text-align:center" type="text" name="rol" id="rol" value="<?=$al[0][0]?>" /></li>
				<li style="color:white">Carrera:<br><input readonly style="text-align:center" type="text" name="carrera" id="carrera" value="<?=$carrera?>"/></li>
				<li style="color:white">Talla:<br><input  style="text-align:center" type="text" name="talla" id="talla"value="<?=$al[0][7]?>" /></li>
			<!--<li>Talla:<br><select class="select" name="talla" id="talla" >
				<option value="<?=$al[0][7]?>"><?=$al[0][7]?></option>
	    		<option value="XS">XS</option>
	    		<option value="S">S</option>
	    		<option value="M">M</option>
	    		<option value="L">L</option>
				<option value="XL">XL</option>
				<option value="XLL">XLL</option>
				</select></li> -->
				<li style="color:white">Correo:<br><input readonly style="text-align:center" type="text" name="correo" id="correo" value="<?=$al[0][4]?>" /></li> 
				<li style="color:white">Teléfono:<br><input readonly style="text-align:center" type="text" name="telefono" id="telefono" value="<?=$al[0][6]?>" /></li> 
				<li style="color:white">Contraseña:<br><input readonly style="text-align:center" type="text" name="contrasena" id="contrasena" value="<?=$al[0][5]?>" /></li> 
				<li><input value="Guardar" class="btn btn-info" type="submit" /></li>
			</form>
		</ul>
	</div>
		  
</body>  
</html> 
