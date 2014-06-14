<?php 
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

	function ObtenerAlumnos()
	{
		include("bd.php");
		$query = "SELECT * FROM alumno";
		$result = pg_query($query);
		$alumnos = array();
		while ($row = pg_fetch_row($result)){
			array_push($alumnos, $row);
			}
			foreach ($alumnos as $items) {
				echo "rol: $items[0]/";
			}
		return $alumnos;
	}

	function ObtenerRolesAlumnos()
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

	function ObtenerContrasenasAlumnos()
	{
		include("bd.php");
		$query = "SELECT * FROM alumno";
		$result = pg_query($query);
		$alumnos = array();
		$contrasenas= array();
		$i = 0;
		while ($row = pg_fetch_row($result)) {
			array_push($alumnos, $row);
			array_push($contrasenas,$row[5]);
			}
		return $contrasenas;
	}

?> 