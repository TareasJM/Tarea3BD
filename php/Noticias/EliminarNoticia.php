<?php

	include("../bd.php");
	
	function deleteNoticiaByID($id_noticia)
	{
		$query = "DELETE FROM noticia where id_noticia = '".$id_noticia."'";
		$result = pg_query($query);
		return $result;
	}


	echo  deleteNoticiaByID($_GET[id_noticia]);
	header("Location: ../../public_html/Noticias.php");
?>