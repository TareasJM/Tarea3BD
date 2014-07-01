<?php
	
	session_start();
	$_SESSION['rol'] = $_GET[rol];
    header("Location: ../../public_html/EditarCoArea.php");
    
 ?>