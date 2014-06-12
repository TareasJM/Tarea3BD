<?php  
	include("bd.php");
	$query = "SELECT * FROM alumno";
	$result = pg_query($query);
	$alumnos = array();
	while ($row = pg_fetch_row($result)) {
		array_push($alumnos, $row);
	}
?> 