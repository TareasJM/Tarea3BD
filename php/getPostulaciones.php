<?php  
	include("bd.php");
	$query = "SELECT * FROM postula";
	$result = pg_query($query);
	$postulaciones = array();
	while ($row = pg_fetch_row($result)) {
		array_push($postulaciones, $row);
	}
?> 