<?php

	include("../bd.php");
	session_start();
	function SeleccionarColaborador($id_postulante,$id_area)
	{	
		include("../bd.php");
		$query = "UPDATE postula set estado = TRUE WHERE id_postulante = '".$id_postulante."' and id_area = '".$id_area."'";
		$result = pg_query($query);
		return $result;
	}


	echo SeleccionarColaborador($_GET[id_postulante],$_GET[id_area]);
	header("Location: ../../public_html/VerPostulantes.php");
?>
