<?php

if ($conexion = mysqli_connect('localhost', 'root', '12345', 'usuarios_escuela_web')) {

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		$cadena_JSON = file_get_contents('php://input');
		$datos = json_decode($cadena_JSON, true);

		$sql = "SELECT * FROM usuarios";
		$res = mysqli_query($conexion, $sql);
		$datos['usuarios'] = array();
		while ($fila = mysqli_fetch_assoc($res)) {
			$alumno = array();
			$alumno['nc'] = $fila['nombre_usuario'];
			$alumno['n'] = $fila['contrasena'];

			array_push($datos['usuarios'], $alumno);
		}

		echo json_encode($datos);

	}

} else {
	die("Error de conexion" . mysqli_connect_error());
}

?>