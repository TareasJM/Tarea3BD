<?php
	include("getAlumnos.php");

	function login($user, $pass){
		$alumnos = getAlumnos();
		foreach ($alumnos as $alumno) {
	    	if ($alumno[0] == $user && $alumno[5] == pass){
	    		return TRUE;
	    	}
		}
		return FALSE;
	}

	function testlogin(){
		header("Location: http://google.com");
		die();
	}
	echo "incluidooooooo";
 ?>