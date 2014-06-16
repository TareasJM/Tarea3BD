	         
<?php
	

	include("../php/Area.php");
	session_start();
	$area = new Area();
	$areas = $area->getAreas();
	// $postulante = new Alumno();
	// $postulantes = $postulante->getPostulantes();
	// $aux = $area->getAreaCoordinador($_SESSION['id_coordinador']);
	// $id;
	// foreach ($aux as $key) 
	// {
	 	
	//  	$id = $key[1];
	// } 

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
	
				<li><a href="index.php">Atrás</a></li>
	</div>

	<div id="content" style="color:black">
		<h2 style="text-align:center; padding-bottom:20px">Áreas de Postulantes</h2>
		<ul style="text-align:center">
			<?php if($_SESSION['tipo'] == 1){
				foreach ($areas as $area) {?>
				<li style="padding-bottom:20px"><a href="../php/irAPostulantes2.php?id_area=<?php echo $area[0]?>" 
				style="color:black" ><h4><?=$area[1]?></h4></a></li>

				<?php }}?>
		</ul>
	</div>
		  
</body>  
</html> 