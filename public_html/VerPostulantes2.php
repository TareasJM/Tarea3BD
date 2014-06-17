	         
<?php

    include("../php/Alumno.php");
	session_start();
	$postulante = new Alumno();	
	$id = $_SESSION['id_area'];
	$infoPostulante = $postulante->getInfoGeneralPostulante($id); 

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
							$info = $postulante->getPostulaArea($postu[11]);
							for ($j=0; $j < 3; $j++) 
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
							?>
								<td style="margin-left:500px"><a  href="../php/Colaboradores/SeleccionarColaborador2.php?id_postulante=<?php echo $postu[11] ?>&id_area=<?php echo $id ?>" class="btn btn-info">Seleccionar</a></td>
	            		        <td><a href="../php/Colaboradores/DescartarColaborador2.php?id_postulante=<?php echo $postu[11] ?>&id_area=<?php echo $id ?>" class="btn btn-danger">Descartar</a></td>
								</tr>

	            		<?php 	}
		            		}
		            	}?>
		  
				</tbody>
				</table> 	
	
	</div>
		  
</body>  
</html> 