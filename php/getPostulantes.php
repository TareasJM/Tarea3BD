<?php  
	include("bd.php");
	$query = "SELECT * FROM postulante";
	$result = pg_query($query);
	$postulantes = array();
	while ($row = pg_fetch_row($result)) {
		array_push($postulantes, $row);
	}
?> 