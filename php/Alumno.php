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
		$alumno = array();
		if (!$result) {

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
		$row = pg_num_rows($result);
		if ($row == 0) {

		    return FALSE;
		}
		return TRUE;
	}
}

?>