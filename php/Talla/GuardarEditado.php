<?php

	include("../bd.php");
	function EditTallaColaborador($rol,$talla)
	{
		include("bd.php");
		$query = "UPDATE alumno set talla = '".$talla."' WHERE rol = '".$rol."'";
		$result = pg_query($query);
		return $result;
	}


	echo EditTallaColaborador($_POST[rol_colaborador],$_POST[talla]);
	header("Location: ../../public_html/VerColaboradores.php");
?>
