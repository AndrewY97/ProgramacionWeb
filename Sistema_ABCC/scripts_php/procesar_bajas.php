
<?php


	include_once("alumno_dao.php");

	

	if(isset($_GET) && !empty($_GET)){

		$nc = $_GET["nc"];

		$aDAO = new AlumnoDAO();

		$aDAO->eliminar($nc);

	}else
		echo "Faltan DATOS";


?>