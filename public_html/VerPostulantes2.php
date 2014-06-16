	         
<?php

	include("../php/Alumno.php");
	include("../php/Area.php");
	session_start();
	$postulante = new Alumno();
	$postulantes = array();
	$area = new Area();
	$id = $_SESSION['id_area'];
	$aux = $area->getPostulanteArea($id);
	foreach ($aux as $key) 
	{	
			// echo "key[0] --> id postulante = $key[0]";
	 	foreach ($postulante->getPostulante($key[0]) as $value)
	 	{
	 		// echo "value[1] -->$value[1] = rol ";
	 		$alumno = $postulante->getAlumno($value[1]);
	 		
	 		foreach ($alumno as $value2)
	 		{	
	 			// echo "value2[0]---> $value2[5]";
	 			array_push($postulantes, $value2);
	 			// echo "postulantes[1]---> $postulantes[1]";
	 		}
	 		
	 	}
	 	
	} 

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
	
				<li><a href="VerPostulantes.php">Atrás</a></li>
	</div>

	<div id="content" style="color:black">
		<h2 style="text-align:center">Postulantes</h2>

		<ul style="text-align:center">
			<?php 
				foreach ($postulantes as $postu) {?>

				<li><a href="" style="color:black"><h4><?=$postu[3]?></h4></a></li>

				<?php }?>
		</ul>
	
	</div>
		  
</body>  
</html> 