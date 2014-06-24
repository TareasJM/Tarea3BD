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

	function getPostulaPostulante($id_postulante)
	{
		include("bd.php");
		$query = "SELECT *FROM postula WHERE id_postulante = '".$id_postulante."'";
		$result = pg_query($query);
		$postula = array();
		while ($row = pg_fetch_row($result)) 
		{
			array_push($postula, $row);
		}
		return $postula;
	}

	function getInfoGeneralPostulante($id_area)
	{
		include("bd.php");
		$query = "SELECT *FROM CARRERA c, ALUMNO a,POSTULA p, POSTULANTE z, Area w WHERE  w.id_area = '".$id_area."' and p.id_area = '".$id_area."' and c.id_carrera = a.id_carrera and p.id_postulante = z.id_postulante and z.rol = a.rol ORDER BY a.nombreAL ASC";
		$result = pg_query($query);
		$todo = array();
		$agregados = array();
		while ($row = pg_fetch_row($result)) {
			if (!in_array($row[3], $agregados)) {
				array_push($todo, $row);
				array_push($agregados, $row[3]);
			}

		}
		return $todo;
	}

	function getPostulaArea($id_postulante)
	{
		include("bd.php");
		$query = "SELECT *FROM POSTULA P, AREA A WHERE P.ID_POSTULANTE = '".$id_postulante."' AND A.ID_AREA = P.ID_AREA";
		$result = pg_query($query);
		$postula = array();
		while ($row = pg_fetch_row($result)) 
		{
			array_push($postula, $row);
		}
		return $postula;
	}

	function getInfoGeneralColaboradores($id_area)
	{
		include("bd.php");
		$query = "SELECT *FROM CARRERA c, ALUMNO a,POSTULA p, POSTULANTE z, Area w WHERE  p.id_area = '".$id_area."' and w.id_area = '".$id_area."' and p.estado = true and c.id_carrera = a.id_carrera and p.id_postulante = z.id_postulante and z.rol = a.rol ORDER BY a.nombreAL ASC";
		$result = pg_query($query);
		$todo = array();
		while ($row = pg_fetch_row($result)) {
				array_push($todo, $row);

		}
		return $todo;
	}

	function getCarrera($id_carrera)
	{
		include("bd.php");
		$query = "SELECT nombreC From Carrera where id_carrera = '".$id_carrera."'";
		$result = pg_query($query);
		$nombre;
		while ($row = pg_fetch_assoc($result)) {
				$nombre = $row['nombrec'];
		}
		return $nombre;

	}

	function getCampusCarrera($id_carrera)
	{
		include("bd.php");
		$query = "SELECT campusC From Carrera where id_carrera = '".$id_carrera."'";
		$result = pg_query($query);
		$campus;
		while ($row = pg_fetch_assoc($result)) {
				$campus = $row['campusc'];

		}
		return $campus;

	}

	function isColaborador($rol,$id_area)
	{
		include("bd.php");
		$query = "SELECT id_postulante From Postulante where rol = '".$rol."'";
		$result = pg_query($query);
		$id_postulante;
		$estadoPostulante;
		while ($row = pg_fetch_assoc($result)) {
				$id_postulante = $row['id_postulante'];
		}
		$query = "SELECT  estado From Postula where id_postulante = '".$id_postulante."' and id_area ='".$id_area."'";
		$result = pg_query($query);
		while ($row = pg_fetch_assoc($result)) {
				$estadoPostulante = $row['estado'];
		}
		if($estadoPostulante == t)
		{
			return true;
		}
		else
		{	
			return false;
		}
	}


}

?>