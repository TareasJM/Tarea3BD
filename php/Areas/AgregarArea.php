<?php

	include("bd.php");
	
	function agregarArea($nombre,$col,$horario){
		
		$query = "INSERT INTO area (nombre,n_colaboradores,horario) VALUES 
		('".$nombre."','".$col."','".$horario."')";		
		return pg_query($query);
	}

	echo agregarArea($_POST[nombre],$_POST[ncol],$_POST[horario]);
	header("Location: ../public_html/areas.php");
?>