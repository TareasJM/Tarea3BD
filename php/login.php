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
		$id = $pocs[0];
	}
    if ($alumno == FALSE ) {
        header("Location: ../public_html/login.php");
        die();
    }
    else{
    	session_start();
		$_SESSION['alumno'] = $alumno;
		$_SESSION['tipo'] = $tipo;
		$_SESSION['id_coordinador'] = $id;
        header("Location: ../public_html/index.php");
    }
 ?>