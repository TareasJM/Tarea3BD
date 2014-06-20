	         
<?php
	

	include("../php/Area.php");
    include("../php/Alumno.php");
	session_start();
	$area = new Area();
	$colaborador = new Alumno();
	$areas = $area->getAreas();
	$coordina = $area->getAreaCoordinador($_SESSION['id_coordinador']);
	$tipo = $_SESSION['tipo'];
	foreach ($coordina as $id_area) {
		
		$id = $id_area[1];
	}
	//echo "id = $id";
	$infoColaborador = $colaborador->getInfoGeneralColaboradores($id);
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

				<li style="padding-bottom:20px"><a href="../php/irAColaboradores.php?id_area=<?php echo $area[0]?>" 
				style="color:white" ><h4><?=$area[1]?></h4></a></li>

				<?php }}
				else
					{
					
						?>
				<table class="table" style="color:white; text-align:center">
				<thead>
					<?php if(count($infoColaborador)>0)
					{?>
					  	<tr>
						  	<th><h6>Nombre</h6></th>
						  	<th><h6>Carrera</h6></th>
						  	<th><h6>Correo</h6></th>
						  	<th><h6>Teléfono</h6></th>
						  	<th><h6>Talla</h6></th>
						  	<th><h6>Áreas</h6></th>


						</tr>
					<?php } ?>
				</thead>
				<tbody>
						

            		<?php foreach ($infoColaborador as $postu)
						{
							
							$info = $colaborador->getPostulaArea($postu[11]);
							?>
							<tr>

							<?php if($postu[10]== null)
							{
							?>
								<td><h4><?php echo $postu[6] ?></h4></td>
								<td><h4><?php echo $postu[1] ?></h4></td>
								<td><h4><?php echo $postu[7] ?></h4></td>
								<td><h4><?php echo $postu[9] ?></h4></td>
								<td><h4>No Seleccionada</h4></td>
								<?php for ($i=0; $i < 3; $i++) 
								{ 	
									if($info[$i][1] != $id)
									{
										if($info[$i][1] != $id and $info[$i][2] == t)
										{?>
											<td><h4><?php echo $info[$i][5] ?></h4></td>
										<?php 
										}
									}
								}?>
								<td style="margin-left:500px"><a  href="../php/Talla/EditarTalla.php?rol_colaborador=<?php echo $postu[3] ?>" class="btn btn-info">Editar Talla</a></td>
							</tr>
					<?php	}
							else
							{?>
								<td><h4><?php echo $postu[6] ?></h4></td>
								<td><h4><?php echo $postu[1] ?></h4></td>
								<td><h4><?php echo $postu[7] ?></h4></td>
								<td><h4><?php echo $postu[9] ?></h4></td>
								<td><h4><?php echo $postu[10] ?></h4></td>
							<?php for ($i=0; $i < 3; $i++) 
								{ 	
									if($info[$i][1] != $id and $info[$i][2] == t)
									{?>
											<td><h4><?php echo $info[$i][5] ?></h4></td>
										<?php 
									}

								}?>
								<td style="margin-left:500px"><a  href="../php/Talla/EditarTalla.php?rol_colaborador=<?php echo $postu[3] ?>" class="btn btn-info">Editar Talla</a></td>
							</tr>
					<?php	}
						}
					}?>
		  
				</tbody>
				</table> 			

		</ul>
	</div>
		  
</body>  
</html> 