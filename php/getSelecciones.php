<?php  
	include("bd.php");
	$query = "SELECT * FROM seleciona";
	$result = pg_query($query);
	$selecciones = array();
	while ($row = pg_fetch_row($result)) {
		array_push($selecciones, $row);
	}
?> 