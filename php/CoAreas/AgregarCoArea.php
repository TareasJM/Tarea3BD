<?php
	include("../bd.php");
	include("../Alumno.php");
	$alumno = new Alumno();
	function InsertarAlumno($rol,$carrera,$rut,$nombre,$correo,$contrasena,$telefono){
		
		$query = "INSERT INTO alumno VALUES ('".$rol."',
											 ".$carrera.",
											'".$rut."',
											'".$nombre."',
											'".$correo."',
											'".$contrasena."',
											'".$telefono."',
											NULL)";
		return pg_query($query);
	}

	function InsertarCoordinador($rol){
		$query = "INSERT INTO coordinador (id_permiso,rol,tipo) VALUES ('4','".$rol."','2')";
		return pg_query($query);
	}

	function CoordinadorCoordina($id_coordinador,$id_area){
		$query = "INSERT INTO coordina (id_coordinador,id_area) VALUES ('".$id_coordinador."','".$id_area."')";
		return pg_query($query);
	}

	echo InsertarAlumno($_POST[rol],$_POST[carrera],$_POST[rut],$_POST[nombre],$_POST[correo],$_POST[contrasena],$_POST[telefono]);
	echo InsertarCoordinador($_POST[rol]);
	$co = $alumno->getPOC($_POST[rol]);
	foreach ($co as $id) {
		
		$id_co = $id[0];
	}
	echo CoordinadorCoordina($id_co,$_POST[area]);
	header("Location: ../../public_html/coAreas.php");

?> 