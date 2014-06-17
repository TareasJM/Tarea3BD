<?php
	
	session_start();
	$_SESSION['rol_colaborador_talla'] = $_GET[rol_colaborador];
    header("Location: ../../public_html/EditarTalla.php");
    
 ?>