<?php

	include("../bd.php");
	
	function deleteCoAreaByRol($rol)
	{
		$query = "DELETE FROM coordinador where rol = '".$rol."'";
		$result = pg_query($query);
		return $result;
	}


	echo  deleteCoAreaByRol($_GET[rol]);
	header("Location: ../../public_html/coAreas.php");
?>