<?php

class Area
{

	function _construct()
	{

	}

	function getAreas()
	{
		include("bd.php");
		$query = "SELECT * FROM area ORDER BY nombreA";
		$result = pg_query($query);
		$areas = array();
		while ($row = pg_fetch_row($result))
		{	
			array_push($areas, $row);
		}
		return $areas;
	}

	function EditArea($nombre)
	{
		include("bd.php");
		$query = "SELECT * FROM area WHERE nombreA = '".$nombre."'";
		$result = pg_query($query);
		$area = array();
		while ($row = pg_fetch_row($result))
		{	
			array_push($area, $row);
		}
		return $area;
	}

	function getAreaCoordinador($id_coordinador)
	{
		include("bd.php");
		$query = "SELECT * FROM coordina WHERE id_coordinador = '".$id_coordinador."'";
		$result = pg_query($query);
		$coordina = array();
		while ($row = pg_fetch_row($result))
		{	
			array_push($coordina, $row);
		}
		return $coordina;
	}


	function getPostulanteArea($id_area)
	{
		include("bd.php");
		$query = "SELECT * FROM Postula WHERE id_area = '".$id_area."'";
		$result = pg_query($query);
		$postula = array();
		while ($row = pg_fetch_row($result))
		{	
			array_push($postula, $row);
		}
		return $postula;
	}


	function getArea($id_area)
	{
		include("bd.php");
		$query = "SELECT * FROM Area WHERE id_area = '".$id_area."'";
		$result = pg_query($query);
		$area = array();
		while ($row = pg_fetch_row($result))
		{	
			array_push($area, $row);
		}
		return $area;
	}


	// function deleteAreaByName($nombre)
	// {
	// 	include("bd.php");
	// 	$query = "DELETE FROM area where nombre = '".$nombre."'";
	// 	$result = pg_query($query);
	// 	$row = pg_num_rows($result);
	// 	if($row == 0)
	// 	{
	// 		echo "<script type='text/javascript'>alert('No ha sido borrado');</script>";
	// 		return $this->load->view('../puclic_html/areas.php');
	// 		// header("Location: ../public_html/areas.php");
	// 	}
	// 	echo "<script type='text/javascript'>alert('Borrado con éxito');</script>";
	// 	return $this->load->view('../puclic_html/areas.php');
	// 	// header("Location: ../public_html/areas.php");
	// }
}

?>