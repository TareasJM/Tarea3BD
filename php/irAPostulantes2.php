<?php
	
	session_start();

	$_SESSION['id_area'] = $_GET[id_area];
    header("Location: ../public_html/VerPostulantes2.php");
    
 ?>