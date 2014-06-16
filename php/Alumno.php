<?php

class Alumno
{

	function _construct()
	{

	}

	function getAlumnos(){
		include("bd.php");
		$query = "SELECT * FROM alumno";
		$result = pg_query($query);
		$alumnos = array();
		while ($row = pg_fetch_row($result)) {
			array_push($alumnos, $row);
		}
		return $alumnos;
	}

	function getAlumno($rol)
	{
		include("bd.php");
		$query = "SELECT * FROM alumno where rol = '".$rol."'";
		$result = pg_query($query);
		$alumnos = array();
		while ($row = pg_fetch_row($result)){
			array_push($alumnos, $row);
			}
		return $alumnos;
	}


	function getRolesAlumnos()
	{
		include("bd.php");
		$query = "SELECT * FROM alumno";
		$result = pg_query($query);
		$alumnos = array();
		$roles = array();
		while ($row = pg_fetch_row($result)) {
			array_push($alumnos, $row);
			array_push($roles,$row[0]);
			}
		return $roles;
	}

	function getContrasenasAlumnos()
	{
		include("bd.php");
		$query = "SELECT *FROM alumno";
		$result = pg_query($query);
		$alumnos = array();
		$contrasenas= array();
		while ($row = pg_fetch_row($result)) {
			array_push($alumnos, $row);
			array_push($contrasenas,$row[5]);
			}
		return $contrasenas;
	}

	function getPOC($rol)
	{
		include("bd.php");
		$query = "SELECT *FROM Coordinador WHERE rol = '".$rol."'";
		$result = pg_query($query);
		$row = pg_num_rows($result);
		$alumno = array();
		if ($row == 0) {

		    $query = "SELECT *FROM Postulante WHERE rol = '".$rol."'";
		    $result = pg_query($query);
		}
		while ($row = pg_fetch_row($result)) 
		{
			array_push($alumno, $row);
			
		}
		return $alumno;
	}

	function POC($rol)
	{
		include("bd.php");
		$query = "SELECT *FROM Coordinador WHERE rol = '".$rol."'";
		$result = pg_query($query);
		
		if ($row == 0) {

		    return FALSE;
		}
		return TRUE;
	}


	function getCoordinadores()
	{
		include("bd.php");
		$query = "SELECT *FROM Coordinador WHERE tipo = '2'";
		$result = pg_query($query);
		$alumno = array();
		while ($row = pg_fetch_row($result)) 
		{
			array_push($alumno, $row);
		}
		return $alumno;
	}

	function getPostulantes()
	{
		include("bd.php");
		$query = "SELECT *FROM Postulante";
		$result = pg_query($query);
		$postulante = array();
		while ($row = pg_fetch_row($result)) 
		{
			array_push($postulante, $row);
		}
		return $postulante;
	}

	function getPostulante($id_postulante)
	{
		include("bd.php");
		$query = "SELECT *FROM postulante WHERE id_postulante = '".$id_postulante."'";
		$result = pg_query($query);
		$postulante = array();
		while ($row = pg_fetch_row($result)) 
		{
			array_push($postulante, $row);
		}
		return $postulante;
	}

}

?>