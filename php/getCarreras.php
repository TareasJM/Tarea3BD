<?php  
	include("bd.php");
	$query = "SELECT * FROM carrera";
	$result = pg_query($query);
	$carreras = array();
	while ($row = pg_fetch_row($result)) {
		array_push($carreras, $row);
	}
?> 