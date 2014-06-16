<?php
	include("../Noticia.php");
	
	session_start();
	$noticia = new Noticia();
	$edit = $noticia->EditNoticia($_GET[id_noticia]);
	$_SESSION['noticia'];
	foreach ($edit as  $a) 
	{
			
		$_SESSION['noticia'] = $a;
	}
    header("Location: ../../public_html/EditarNoticia.php");
    
 ?>