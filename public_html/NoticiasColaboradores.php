	         
<?php
	session_start();
	include("../php/Noticia.php");
	include("../php/Alumno.php");
	$noticia = new Noticia();
	$alumno  = new Alumno();
	$postulante = $alumno->getPoc($_SESSION['alumno'][0]);
	$infoPostula = $alumno->getPostulaArea($postulante[0][0]);
	$noticias;
	
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
		<h2 style="text-align:center">Noticias</h2>
		<table class="table" style="color:black">
		  <?php
		  	for ($i=0; $i < 3; $i++) 
		  	{ 

		  		if($infoPostula[$i][2] == t)
		  		{
		  			$noticias = $noticia->getNoticiasByIDArea($infoPostula[$i][1]);
		  			foreach ($noticias as $a) 
					{	
						?>
					
							<?php if(count($noticias)>0)
							{?>
								<thead>

							  	<tr>
								  	<th><h2>Titulo</h2></th>
								  	<th><h2>Contenido</h2></th>
								</tr>
							<?php } ?>
								</thead>
						<tbody>
		            	<tr style="margin-rigth:500px">
		            		<td><h4><?php echo $a[3] ?></h4></td>	
		            		<td><h4><?php echo $a[4] ?></h4></td>			            		
		            	</tr>
            			</tbody>
					
              <?php } 
				}
		  	} ?>
		  	</table>
 
	</div>
		  
</body>  
</html> 