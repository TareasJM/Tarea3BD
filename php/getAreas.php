<?php


	include("bd.php");
	$query = "SELECT * FROM area";
	$result = pg_query($query);
	$areas = array();
	while ($row = pg_fetch_row($result)) {
		array_push($areas, $row);
	}

	function deleteAreaByName($nombre)
	{
		include("bd.php");
		$query = "DELETE FROM area where nombre = '".$nombre."'";
		$result = pg_query($query);
		$row = pg_num_rows($result);
		if($row == 0)
		{
			echo "<script type='text/javascript'>alert('No ha sido borrado');</script>";

			// header("Location: ../public_html/areas.php");
		}
		echo "<script type='text/javascript'>alert('Borrado con éxito');</script>";
		// header("Location: ../public_html/areas.php");
	}
	function Test($nombre)
	{
			echo "<script type='text/javascript'>alert('<?php echo 'area = $nombre' ?>');</script>";
	}
?> 