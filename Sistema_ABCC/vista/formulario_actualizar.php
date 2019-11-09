<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Cambios en alumnos</title>
	</head>
	<body>

		<?php
		
			require_once('menu_principal.php');

		?>

		<h1>Cambios Alumnos</h1>
		<br>	
		<form method="POST" action="../scripts_php/procesar_cambio.php">
		<?php 
                        	include_once("../scripts_php/alumno_DAO.php");
							$aDAO = new AlumnoDAO();
							$listaAlumnos=$aDAO->obtenerCambio($_GET['nc']);
							while ($fila=mysqli_fetch_object($listaAlumnos)){
									$nc = $fila->numerocontrol;
									$n = $fila->nombre;
									$pa = $fila->primerapellido;
									$sa = $fila->ssegundoapellido;
									$e = $fila->edad;
									$s = $fila->semestre;
									$c = $fila->carrer;
		?>

				<br>
				<label>Numero de control: </label>
				<input type="text" name="numcontrol" value="<?php echo $nc;?>" readonly>
				<br>
				<label>Nombre: </label>
				<input type="text" name="nombre" value="<?php echo $n;?>">
				<br>
				<label>Primer Apellido: </label>
				<input type="text" name="app" value="<?php echo $pa;?>">
				<br>
				<label>Segundo apellido: </label>
				<input type="text" name="apm" value="<?php echo $sa;?>">
				<br>
				<label>Edad: </label>
				<input type="text" name="edad" value="<?php echo $e;?>">
				<br>
				<label>Semestre: </label>
				<input type="text" name="semestre" value="<?php echo $s;?>">
				<br>
				<label>Carrera: </label>
				<input type="text" name="carrera" value="<?php echo $c;?>">
								
										
		<?php
			}
		?>  
		
				<br>
				<input type="submit" name="" value="Guardar">
		</form>







</body>
</html>