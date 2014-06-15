<?php
	include("Alumno.php");
	include("bd.php");
	
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
		$query = "INSERT INTO postulante (rol) VALUES ('".$rol."')";
		return pg_query($query);
	}

	function InsertarPostulacion($id,$area,$prioridad){
		$query = "INSERT INTO postula (id_postulante,id_area,estado,prioridad) VALUES 
		('".$id."','".$area."',FALSE,'".$prioridad."')";
		return pg_query($query);
	}


	echo InsertarAlumno($_POST[rol],$_POST[carrera],$_POST[rut],$_POST[nombre],$_POST[correo],$_POST[contrasena],$_POST[telefono]);
	echo InsertarPostulante($_POST[rol]);
	$alumno = new Alumno();
	$id_postulante = $alumno->getPOC($_POST[rol]);
	$id_pos =  6;
	foreach($id_postulante as $id)
	{
		$id_pos = $id[0];
	}
	echo InsertarPostulacion($id_pos,$_POST[postulacion1],1);
	echo InsertarPostulacion($id_pos,$_POST[postulacion2],2);
	echo InsertarPostulacion($id_pos,$_POST[postulacion3],3);

	header("Location: ../public_html/login.php");

?> 