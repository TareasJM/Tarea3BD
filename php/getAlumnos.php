<?php 

	function ObtenerAlumnos()
	{
		include("bd.php");
		$query = "SELECT * FROM alumno";
		$result = pg_query($query);
		$alumnos = array();
		while ($row = pg_fetch_row($result)){
			echo "rol: +$row[0] nombre: $row[3]";
			array_push($alumnos, $row);
			}
		return $alumnos;
	}

	function ObtenerNombresAlumnos()
	{
		include("bd.php");
		$query = "SELECT * FROM alumno";
		$result = pg_query($query);
		$alumnos = array();
		while ($row = pg_fetch_row($result)) {
			array_push($alumnos, $row);
			}

		$nombres = array(array('nombres','contrasena'));
		for($i = 0; $i < sizeof($alumnos); $i++)
		{
			array_push($nombres, $alumnos[i][0]);
			echo $alumnos[i][0];
		}

		return $nombres;
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
		for($i = 0; $i < sizeof($alumnos); $i++)
		{
			array_push($contrasenas, $alumnos[i][5]);
			echo $alumnos[i][5];
		}

		return $contrasenas;
	}

	function Test()
	{	
		$hola = "HOLA";
		return $hola;
	}

?> 