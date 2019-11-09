<?php


	include_once("alumno_dao.php");

	

	if(isset($_GET) && !empty($_GET)){

		$nc2 = $_GET["caja2"];

		$aDAO = new AlumnoDAO();

		$aDAO->obteneruno($nc);
		echo "$nc2";

	}else
		echo "Faltan DATOS";


?>