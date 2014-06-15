	         
<?php

	include("../php/Area.php");
	$area = new Area();
	$areas = $area->getAreas();

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
					<li><a href="ingresarPostulacion.php">Postular<a/><li>
					<li><a href="login.php">Login<a/><li>
					<li><a href="login.php">Logout<a/><li>
				</ul>
			</div>
		</div>
	</div>

	<div id="sidebar">
	
				<li><a href="ingresarPostulacion.php">Postular<a/><li>
				<li><a href="login.php">Login<a/><li>
				<li><a href="login.php">Logout<a/><li>
	</div>

	<div id="content" style="color:black">
		<h2 style="text-align:center">Áreas</h2>
		<table class="table" style="color:black">
		<tbody>
		  <?php 
			foreach($areas as $a)
			{?>
            	<tr style="margin-rigth:500px">
            		<td><h4><?php echo $a[1] ?></h4></td>	
            		<td style="margin-left:500px"><input value="Editar" class="btn btn-info"/></td>
            		<td><input value="Eliminar" class="btn btn-danger"/></td>
            	</tr>
            <?php } ?>
		</tbody>
		</table> 
	</div>
		
</body>  
</html> 