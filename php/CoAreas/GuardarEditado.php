<?php

	include("../bd.php");
	function EditAlumno($rol,$talla)
	{
		include("../bd.php");
		$query = "UPDATE alumno set talla = '".$talla."' WHERE rol = '".$rol."'";
		$result = pg_query($query);
		return $result;
	}


	echo EditAlumno($_POST[rol],$_POST[talla]);
	header("Location: ../../public_html/coAreas.php");
?>