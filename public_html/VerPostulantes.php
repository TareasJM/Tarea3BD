	         
<?php
	

	include("../php/Area.php");
    include("../php/Alumno.php");
	session_start();
	$area = new Area();
	$postulante = new Alumno();
	$areas = $area->getAreas();
	$coordina = $area->getAreaCoordinador($_SESSION['id_coordinador']);
	$tipo = $_SESSION['tipo'];
	foreach ($coordina as $id_area) {
		
		$id = $id_area[1];
	}

	$infoPostulante = $postulante->getInfoGeneralPostulante($id);
	$campus = $postulante->getCampusCarrera($_SESSION['alumno'][1]);
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
		
		
			<?php if($tipo == 1){
				foreach ($areas as $area) {?>

				<li style="padding-bottom:20px"><a href="../php/irAPostulantes2.php?id_area=<?php echo $area[0]?>" 
				style="color:white" ><h4><?=$area[1]?></h4></a></li>

				<?php }}
				else
					{
					
						?>
				<table class="table" style="color:white; text-align:center">
				<thead>
					<?php if(count($infoPostulante)>0)
					{?>
					  	<tr>
						  	<th><h6>Nombre</h6></th>
						  	<th><h6>Carrera</h6></th>
						  	<th><h6>Prioridad</h6></th>
						  	<th><h6>Estado</h6></th>
						  	<th><h6>Áreas</h6></th>
						  	<th></th>
						  	<th><h6>Prioridad</h6></th>
						  	<th></th>
						  	<th><h6>Estado</h6></th>


						</tr>
					<?php } ?>
				</thead>
				<tbody>
					
						<?php foreach ($infoPostulante as $postu)
						{	
							//poner aca si el area pertene al campus o no
							$info = $postulante->getPostulaArea($postu[11]);

							for ($j=0; $j < 3; $j++) 
							{ 	
								if($info[$i][8] == $campus)
								{
									if($id == $info[$j][1])
									{
									?>	

									<tr>
										<td><h4><?php echo $postu[6] ?></h4></td>
										<td><h4><?php echo $postu[1] ?></h4></td>
										<?php for ($i=0; $i < 3; $i++) { 
											if($info[$i][1] == $id)
											{?>
											<td><h4><?= $info[$i][3]?></h4></td>
											<td><h4><?= $info[$i][2]?></h4></td>
									<?php 	}
										}
									?>
										<?php for ($i=0; $i < 3; $i++) { 
											if($info[$i][1] != $id)
											{?>
											<td><h4><?= $info[$i][5]?></h4></td>
									<?php 	}
										}
									?>
										<?php for ($i=0; $i < 3; $i++) { 				
										if($info[$i][1] != $id)
											{?>
											<td><h4><?= $info[$i][3]?></h4></td>
									<?php 	}
										}
									?>
										<?php for ($i=0; $i < 3; $i++) { 			
										if($info[$i][1] != $id)
											{?>
											<td><h4><?= $info[$i][2]?></h4></td>
									<?php 	}
										}
								}	?>
							<td style="margin-left:500px"><a  href="../php/Colaboradores/SeleccionarColaborador.php?id_postulante=<?php echo $postu[11] ?>&id_area=<?php echo $id ?>" class="btn btn-info">Seleccionar</a></td>
            		        <td><a href="../php/Colaboradores/DescartarColaborador.php?id_postulante=<?php echo $postu[11] ?>&id_area=<?php echo $id ?>" class="btn btn-danger">Descartar</a></td>
							</tr>

            		  <?php }
	            		}
            		}?>
		  
				</tbody>
				</table> 			
				<?php }?>

		</ul>
	</div>
		  
</body>  
</html> 