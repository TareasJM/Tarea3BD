<?php
	include("../bd.php");
	date_default_timezone_set('UTC');
	$fecha = date("d-m-Y");
	session_start();
	function agregarNoticia($id_coordinador,$id_area,$titular,$contenido,$fecha){
		
		$query = "INSERT INTO noticia VALUES ('".$id_coordinador."',
											 ".$id_area.",
											'".$titular."',
											'".$contenido."',
											'".$fecha."')";
		return pg_query($query);
	}
	echo agregarNoticia($_SESSION['id_coordinador'],$_POST[area],$_POST[titular],$_POST[contenido],$fecha);
	header("Location: ../../public_html/Noticias.php");

?> 