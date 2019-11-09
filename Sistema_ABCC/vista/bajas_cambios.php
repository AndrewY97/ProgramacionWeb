





<!DOCTYPE html>
<html>
<head>
	<title>ELIMINAR/MODIFICAR ALUMNOS</title>
	<style type="text/css">
		table, th, td{
			 border: 1px solid navy;
		}
	</style>


	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/custom.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>

	
	
	<h1>ELIMINAR/MODIFICAR Registros</h1>

	<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Listado de  <b>ALUMNOS</b></h2></div>
                    <div class="col-sm-4">
                        <a href="formulario_altas.php" class="btn btn-info add-new">
                        	<i class="fa fa-plus"></i> 
                        	Agregar ALUMNO
                        </a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Numero de Control</th>
                        <th>Nombre(s)</th>
                        <th>Primer Ap.</th>
						<th>Segundo Ap.</th>
                        <th>Edad</th>
                        <th>Semestre</th>
                        <th>Carrera</th>
                        <th>REALIZAR</th>
                    </tr>
                </thead>
                 
                <tbody>    
                        <?php 
                        	include_once("../scripts_php/alumno_dao.php");
							$aDAO = new AlumnoDAO();
							$listaAlumnos=$aDAO->obtenerTodos();

							while ($fila=mysqli_fetch_object($listaAlumnos)){
									$nc = $fila->numerocontrol;
									$n = $fila->nombre;
									$pa = $fila->primerapellido;
									$sa = $fila->ssegundoapellido;
									$e = $fila->edad;
									$s = $fila->semestre;
									$c = $fila->carrer;
								?>
								<tr>
									<td><?php echo $nc;?></td>
									<td><?php echo $n;?></td>
									<td><?php echo $pa;?></td>
									<td><?php echo $sa;?></td>
									<td><?php echo $e;?></td>
									<td><?php echo $s;?></td>
									<td><?php echo $c;?></td>
									
									<td style="text-align: center;">

										<a href="formulario_actualizar.php?nc=<?php echo   $nc;?>" class="edit" title="Edición" data-toggle="tooltip">
											<i class="fa fa-pencil" style="font-size:30px;color:orange;"></i>
										</a>

										
											<!-- <i class="material-icons">&#xE254;</i> -->




										</a>
										<a href="../scripts_php/procesar_bajas.php?nc=<?php echo $nc;?>" class="delete" title="Eliminación" data-toggle="tooltip">
											<!-- <i class="material-icons">&#xE872;</i> -->

<i class="fa fa-trash" style="font-size:30px;color:red; padding-left: 30px;"></i>											
										</a>
									</td>
								</tr>	
								<?php
							}
								?>  
                </tbody>
            </table>
        </div>
        <a href="menu_principal.php">Regresar</a>
    </div>   

	
</body>
</html>











