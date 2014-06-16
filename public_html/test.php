<?php  
	include("../php/Alumno.php");
	$a = new Alumno();
	$info = $a->getInfoGeneralPostulante(1);
	echo "tula <br>";

	foreach ($info as $row) {
		foreach ($row as $val) {
			echo $val." - ";
		}
		echo "<br>";
	}


	$prueba = array(1,2,3,4,5);
	foreach ($prueba as $n) {
		echo $n;
		$n = 0;
	}

	foreach ($prueba as $n) {
		echo $n;
	}

?> 