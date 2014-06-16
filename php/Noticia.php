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

}

?>