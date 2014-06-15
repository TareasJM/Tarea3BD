<?php
	include("../Area.php");
	session_start();
	$area = new Area();
	$edit = $area->EditArea($_GET[nombre]);
	$_SESSION['area'];
	foreach ($edit as  $a) 
	{
			
		$_SESSION['area'] = $a;
	}
    header("Location: ../../public_html/EditarArea.php");
    
 ?>