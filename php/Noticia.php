<?php

class Noticia
{

	function getNoticias(){
		include("bd.php");
		$query = "SELECT * FROM noticia";
		$result = pg_query($query);
		$noticias = array();
		while ($row = pg_fetch_row($result)) {
			array_push($noticias, $row);
		}
		return $noticias;
	}

	function EditNoticia($id)
	{
		include("bd.php");
		$query = "SELECT * FROM noticia WHERE id_noticia = '".$id."'";
		$result = pg_query($query);
		$noticia = array();
		while ($row = pg_fetch_row($result))
		{	
			array_push($noticia, $row);
		}
		return $noticia;
	}

	function getNoticiasByIDArea($id_area)
	{
		include("bd.php");
		$query = "SELECT * FROM noticia Where id_area = '".$id_area."'";
		$result = pg_query($query);
		$noticias = array();
		while ($row = pg_fetch_row($result)) {
			array_push($noticias, $row);
		}
		return $noticias;
	}

}

?>