<?php
	session_start();
	$title = "Inicio";
	$content = "";
	if(isset($_SESSION['alumno'])){
		$content = "hola ". $_SESSION['alumno'][3]."de tipo".$_SESSION['tipo']."<br>";
	}
	$content = $content.'<br><a href="ingresarPostulacion.php">Postular</a>';
	$sidebar = $sidebar.'
				<li><a href="ingresarPostulacion.php">Postular<a/><li>
				<li><a href="login.php">Login<a/><li>
				<li><a href="login.php">Logout<a/><li>';
?>
<?php include("master.php"); ?>
