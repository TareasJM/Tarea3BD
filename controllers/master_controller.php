<?php
include("../php.Alumno.php")

class master_controller
{
	function _construct()
	{

	}
	function login()
	{	
		$alumnos = new Alumnos();
		$alumno = $alumnos->login($_POST[rol], $_POST[contrasena]); 
	    if ($alumno == FALSE ) {
	        header("Location: ../public_html/login.php");
	    }
	    else{
	    	session_start();
			$_SESSION['alumno'] = $alumno;
	        header("Location: ../public_html/index.php");
	    }
	}
}
?>