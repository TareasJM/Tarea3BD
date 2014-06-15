<?php

class Area
{

	function _construct()
	{

	}

	function getAreas()
	{
		include("bd.php");
		$query = "SELECT * FROM area";
		$result = pg_query($query);
		$areas = array();
		while ($row = pg_fetch_row($result)) {
			array_push($areas, $row);
		}
		return $areas;
	}
}

?>