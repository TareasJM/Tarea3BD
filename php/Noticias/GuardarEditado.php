<?php

	include("../bd.php");
	date_default_timezone_set('UTC');
	$fecha = date("d-m-Y");
	session_start();
	function EditNoticiaByID($titular,$contenido,$id_noticia,$fecha)
	{
		include("bd.php");
		$query = "UPDATE noticia set titular = '".$titular."' , contenido = '".$contenido."'
		, fecha = '".$fecha."' WHERE id_noticia = '".$id_noticia."'";
		$result = pg_query($query);
		return $result;
	}


	echo EditNoticiaByID($_POST[titular],$_POST[contenido],$_POST[id_noticia],$fecha);
	header("Location: ../../public_html/Noticias.php");
?>
