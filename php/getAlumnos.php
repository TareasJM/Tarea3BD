<?php 

	function ObtenerAlumnos()
	{
		include("bd.php");
		$query = "SELECT * FROM alumno";
		$result = pg_query($query);
		$alumnos = array();
		while ($row = pg_fetch_row($result)){
			echo "rol: $row[0] nombre: $row[3]";
			array_push($alumnos, $row);
			}
			foreach ($alumnos as $items) {
				echo $items[0];
			}
		return $alumnos;
	}

	function ObtenerRolesAlumnos()
	{
		include("bd.php");
		$query = "SELECT * FROM alumno";
		$result = pg_query($query);
		$alumnos = array();
		while ($row = pg_fetch_row($result)) {
			array_push($alumnos, $row);
			}

		$roles = array();
		foreach($alumnos as $rol)
		{	
			array_push($roles, $rol[0]);

		}

		return $roles;
	}

	function ObtenerContrasenasAlumnos()
	{
		include("bd.php");
		$query = "SELECT * FROM alumno";
		$result = pg_query($query);
		$alumnos = array();
		while ($row = pg_fetch_row($result)) {
			array_push($alumnos, $row);
			}

		$contrasenas= array();
		foreach($alumnos as $pass)
		{	
			array_push($contrasenas, $pass[5]);

		}

		return $contrasenas;
	}

?> 