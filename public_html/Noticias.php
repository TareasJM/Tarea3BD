	         
<?php

	include("../php/Noticia.php");
	include("../php/Area.php");
	$noticia = new Noticia();
	$areas = new Area();
	$noticias = $noticia->getNoticias();

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
	
				<li><a href="crearNoticia.php">Crear Noticia<a/></li>
				<li><a href="index.php">Atrás<a/></li>

	</div>

	<div id="content" style="color:black">
		<h2 style="text-align:center">Noticias</h2>
		<table class="table" style="color:black">
		<thead>
			<?php if(count($noticias)>0)
			{?>
			  	<tr>
			  		<th><h2>Área</h2></th>
				  	<th><h2>Titulo</h2></th>
				  	<th><h2>Contenido</h2></th>
				  	<th><h2>Opciones</h2></th>
				</tr>
			<?php } ?>
		</thead>
		<tbody>
		  <?php 
			foreach ($noticias as $a) 
			{
			$area = $areas->getArea($a[2])
				?>
            	<tr style="margin-rigth:500px">
            		<td><h4><?php echo $area[0][1] ?></h4></td>
            		<td><h4><?php echo $a[3] ?></h4></td>	
            		<td><h4><?php echo $a[4] ?></h4></td>	
            		<td style="margin-left:500px"><a  href="../php/Noticias/EditarNoticia.php?id_noticia=<?php echo $a[0] ?>" class="btn btn-info">Editar</a></td>
            		<td><a href="../php/Noticias/EliminarNoticia.php?id_noticia=<?php echo $a[0] ?>" class="btn btn-danger">Eliminar</a></td>
            		
            	</tr>
            <?php } ?>
		</tbody>
		</table> 
	</div>
		  
</body>  
</html> 