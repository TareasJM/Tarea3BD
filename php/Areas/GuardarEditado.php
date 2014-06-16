<?php

	include("../bd.php");
	session_start();
	function EditAreaByID($id,$nombre,$ncol,$horario)
	{
		include("bd.php");
		$query = "UPDATE area set nombre = '".$nombre."' , n_colaboradores = '".$ncol."', horario = '".$horario."'
		WHERE id_area = '".$id."'";
		$result = pg_query($query);
		return $result;
	}


	echo EditAreaByID($_POST[id_area],$_POST[nombre],$_POST[ncol],$_POST[horario]);
	header("Location: ../../public_html/areas.php");
?>
