




<?php  
	session_start();
	if ($_SESSION['autenticado'] == false ) {
		header("location:login_usuario.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>ALTAS</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/custom.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

	

    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Agregar <b>ALUMNOS</b></h2></div>
                    <div class="col-sm-4">
                    	<!--
                        <a href="index.php" class="btn btn-info add-new"><i class="fa fa-arrow-left"></i> Regresar</a> -->
                    </div>
                </div>
            </div>

			<div class="row">
				<form method="POST" action="../scripts_php/procesar_altas.php">

					<div class="col-md-12">
						<label>Numero de control:</label>
						<input type="text" name="num_control" id="num_control" class='form-control' maxlength="100" required >
					</div>

					<div class="col-md-4">
						<label>Nombre(s):</label>
						<input type="text" name="nombres" id="nombres" class='form-control' maxlength="100" required>
					</div>
					<div class="col-md-4">
						<label>Primer Apellido:</label>
						<input type="text" name="primer_ap" id="primer_ap" class='form-control' maxlength="100" required>
					</div>
					<div class="col-md-4">
						<label>Segundo Apellido:</label>
						<input type="text" name="segundo_ap" id="segundo_ap" class='form-control' maxlength="100" required>
					</div>


					<div class="col-md-12">
						<label>Edad:</label>
						<input type="text" name="edad" id="edad" class='form-control' maxlength="100" required>
					</div>

					<div class="col-md-12">
						<label>Semestre:</label>
						<input type="text" name="semestre" id="semestre" class='form-control' maxlength="15" required >
					</div>

					<div class="col-md-12">
						<label>Carrera:</label>
						<input type="text" name="carrera" id="carrera" class='form-control' maxlength="64" required>
					</div>
					
					<div class="col-md-12 pull-right">
					<hr>
						<button type="submit" class="btn btn-success">Guardar alumno</button>
					</div>

				</form>
			</div>
        </div>
        <a href="menu_principal.php">Regresar</a>
    </div>     
</body>
</html>