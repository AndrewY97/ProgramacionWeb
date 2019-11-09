
<?php


	include("alumno_dao.php");


	if(isset($_POST) && !empty($_POST)){

		$nc = htmlspecialchars($_POST['num_control']);
		$n = htmlspecialchars($_POST['nombres']);
		$pa = htmlspecialchars($_POST['primer_ap']);
		$sa = htmlspecialchars($_POST['segundo_ap']);
		$e = htmlspecialchars($_POST['edad']);
		$s = htmlspecialchars($_POST['semestre']);
		$c = htmlspecialchars($_POST['carrera']);
		
		$aDAO = new AlumnoDAO();

		$aDAO->agregar($nc, $n, $pa, $sa, $e, $s, $c);



	}else
		echo "Datos faltantes";


?>