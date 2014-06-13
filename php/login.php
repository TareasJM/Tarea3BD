<?php
	include("getAlumnos.php");

	function login($user, $pass){
		session_destroy();
		$alumnos = getAlumnos();
		foreach ($alumnos as $alumno) {
	    	if ($alumno[0] == $user && $alumno[5] == $pass){
	    		return $alumno;
	    	}
		}
		return FALSE;
	}

	$alumno = login($_POST[rol], $_POST[contrasena]); 
    if ($alumno == FALSE ) {
        header("Location: ../public_html/login.php");
        die();
    }
    else{
    	session_start();
		$_SESSION['alumno'] = $alumno;
        header("Location: ../public_html/index.php");
    }
 ?>