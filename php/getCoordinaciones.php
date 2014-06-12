<?php  
	include("bd.php");
	$query = "SELECT * FROM coordina";
	$result = pg_query($query);
	$coordinaciones = array();
	while ($row = pg_fetch_row($result)) {
		array_push($coordinaciones, $row);
	}
?> 