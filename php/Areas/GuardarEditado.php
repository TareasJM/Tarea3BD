<?php

	include("bd.php");
	
	function EditAreaByID($id,$nombre,$ncol,$horario)
	{
		include("bd.php");
		$query = "UPDATE area set nombre = '".$nombre."', n_colaboradores = '".$ncol."', horario = '".$horario."'
		WHERE id_area = '".$id."'";
		$result = pg_query($query);
		return $result;
	}


	echo EditAreaByID($_POST[id],$_POST[nombre],$_POST[ncol],$_POST[horario]);
	header("Location: ../../public_html/areas.php");
?>