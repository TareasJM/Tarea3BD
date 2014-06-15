<?php

	include("bd.php");
	
	function deleteAreaByName($nombre)
	{
		include("bd.php");
		$query = "DELETE FROM area where nombre = '".$nombre."'";
		$result = pg_query($query);
		return $result;
	}


	echo deleteAreaByName($_GET[nombre]);
	header("Location: ../public_html/areas.php");
?>