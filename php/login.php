<?php
	include("getAlumnos.php");

	function login($user, $pass){
		$alumnos = getAlumnos();
		foreach ($alumnos as $alumno) {
	    	if ($alumno[0] == $user && $alumno[5] == $pass){
	    		return TRUE;
	    	}
		}
		return FALSE;
	}
    if (login($_POST[rol], $_POST[contrasena])) {
        header("Location: ../public_html/index.php");
        die();
    }
    else{
        header("Location: ../public_html/login.php");
        die();
    }
 ?>