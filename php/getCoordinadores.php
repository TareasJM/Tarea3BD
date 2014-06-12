<?php  
	include("bd.php");
	$query = "SELECT * FROM coordinador";
	$result = pg_query($query);
	$coordinadores = array();
	while ($row = pg_fetch_row($result)) {
		array_push($coordinadores, $row);
	}
?> 