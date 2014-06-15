<?php
	include("getAlumnos.php");
	include("Alumno.php");
	function login($user, $pass){
		session_destroy();
		$al = new Alumno();
		$alumnos = $al->getAlumnos();
		foreach ($alumnos as $alumno) {
	    	if ($alumno[0] == $user && $alumno[5] == $pass){
	    		return $alumno;
	    	}
		}
		return FALSE;
	}

	$alumno = login($_POST[rol], $_POST[contrasena]);
	$al =  new Alumno();
	$poc = $al->getPOC($_POST[rol]);
	$tipo = 3;
	foreach ($poc as $pocs)
	{
		$tipo = $pocs[3];
		$rol = $pocs[0];
	}
    if ($alumno == FALSE ) {
        header("Location: ../public_html/login.php");
        die();
    }
    else{
    	session_start();
		$_SESSION['alumno'] = $alumno;
		$tof = $al->POC($_POST[rol]);
		if($tof == TRUE)
		{
			$_SESSION['tipo'] = $tipo;	
		}
		else
		{
			$_SESSION['tipo'] = $tipo;
		}

        header("Location: ../public_html/index.php");
    }
 ?>