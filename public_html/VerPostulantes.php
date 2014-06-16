	         
<?php
	

	include("../php/Area.php");
    include("../php/Alumno.php");
	session_start();
	$area = new Area();
	$postulante = new Alumno();
	$coordina = $area->getAreaCoordinador($_SESSION['id_coordinador']);

	foreach ($coordina as $id_area) {
		
		$id = $id_area[1];
	}
	//echo "id = $id";
	$infoPostulante = $postulante->getInfoGeneralPostulante($id);
	/*$aux = $area->getPostulanteArea($id);
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
	 			$nombrecar = $postulante->getCarrera($value2[1]);
	 			$nombreCarreras[$value2[1]] = $nombrecar;
	 			// echo "postulantes[1]---> $postulantes[1]";
	 		}
	 		
	 	}
	 	foreach($postulante->getPostulaPostulante($key[0]) as $postula)
	 	{
	 		array_push($postulantePostula,$postula);
	 	}
	 	
	}
	$nombres = array();
	$roles = array();
	foreach ($postulantes as $postu) {

		array_push($nombres,$postu[3]);
		$roles[$postu[3]] = $postu[0];
	}
	*/
	
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

				<?php }}
				else
					{
					
						?>
				<table class="table" style="color:black">
				<thead>
					<?php if(count($infoPostulante)>0)
					{?>
					  	<tr>
						  	<th><h2>Nombre</h2></th>
						  	<th><h2>Carrera</h2></th>
						  	<th><h2>Prioridad de Postulación</h2></th>
						  	<th><h2>Estado</h2></th>
						</tr>
					<?php } ?>
				</thead>
				<tbody>
					
						<?php foreach ($infoPostulante as $postu)
						{?>
							<tr>
							<td><h4><?php echo $postu[6] ?></h4></td>
							<td><h4><?php echo $postu[1] ?></h4></td>
							<td><h4><?php echo $postu[14] ?></h4></td>
							<td><h4><?php echo $postu[13] ?></h4></td>
							<td><h4><?php echo $postu[15] ?></h4></td>
							<td><h4><?php echo $postu[16] ?></h4></td>
							<td><h4><?php echo $postu[17] ?></h4></td>
							<td style="margin-left:500px"><a  href="../php/Areas/EditarArea.php?nombre=<?php echo $a[1] ?>" class="btn btn-info">Editar</a></td>
            		        <td><a href="../php/Areas/EliminarArea.php?nombre=<?php echo $a[1] ?>" class="btn btn-danger">Eliminar</a></td>
							</tr>
							

		            		<?php } ?>
		            		
		            		
		            	
		            	
				  
				</tbody>
				</table> 			
				<?php }?>

		</ul>
	</div>
		  
</body>  
</html> 