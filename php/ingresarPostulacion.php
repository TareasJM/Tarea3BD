<?php
	include("Alumno.php");
	include("bd.php");
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

	function InsertarPostulante($rol){
		$query = "INSERT INTO postulante VALUES ('".$rol."')";
		return pg_query($query);
	}

	function InsertarPostulacion($id,$area,$prioridad){
		$query = "INSERT INTO postula VALUES ('".$id."',
											 ".$area.",
											  FALSE,
											'".$prioridad."')";
		return pg_query($query);
	}

	echo InsertarAlumno($_POST[rol],$_POST[carrera],$_POST[rut],$_POST[nombre],$_POST[correo],$_POST[contrasena],$_POST[telefono]);
	echo InsertarPostulante($_POST[rol]);
	$id_postulante = $alumno->getPOC($_POST[rol]);
	$id_pos;
	foreach($id_postulante as $id)
	{
		$id_pos = $id[0];
	}
	echo InsertarPostulacion($id_pos,$POST[postulacion1],1);
	echo InsertarPostulacion($id_pos,$POST[postulacion2],2);
	echo InsertarPostulacion($id_pos,$POST[postulacion3],3);

	header("Location: ../public_html/login.php");

?> 