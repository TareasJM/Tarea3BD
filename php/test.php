<?php  
	echo "incluido";
	include("bd.php");
	$query = "INSERT INTO alumno VALUES ('123',1,'123','tuula','@@@','pass','123',NULL)";

	$result = pg_query($query);
?> 