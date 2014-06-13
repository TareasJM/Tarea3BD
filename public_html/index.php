<?php
	session_start();
	$title = "Inicio";
	$content = "";
	if(isset($_SESSION['alumno'])){
		$content = "hola ". $_SESSION['alumno'][3]."<br>";
	}
	$content = $content.'<br><a href="ingresarPostulacion.php">Postular</a>';
	$sidebar = "ola soy sidebar <br> jiji";
?>
<?php include("master.php"); ?>
