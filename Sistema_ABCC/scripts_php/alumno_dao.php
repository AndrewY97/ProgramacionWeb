



<?php

	include_once("conexion_bd.php");

	class AlumnoDAO 
	{
		private $conexion;

		public function __construct(){
			$this->conexion = new ConexionBD();
		}

		//============================= METODOS ABCC =====================================
		
		//------------------------- Altas ------------------------------------------------
		public function agregar($nc, $n, $pa, $sa, $e, $s, $c){
			$sql = "INSERT INTO alumnos VALUES('$nc', '$n', '$pa', '$sa', $e, $s, '$c')";
			var_dump($sql);
			$res = mysqli_query($this->conexion->getConexion(), $sql);
			if($res){
				//echo "<br>EXITO";
				echo "<script> alert('Agregado con exito'); </script>";
				header("location:../vista/formulario_altas.php");
			}else{
				echo "<br>Error en agregar  =(  ";
				echo mysqli_error($this->conexion->getConexion());
			}
		}//metodo agregar


		//------------------------- Bajas ------------------------------------------------
		public function eliminar($nc){
			$sql = "DELETE FROM alumnos WHERE numerocontrol='$nc'";
			$res = mysqli_query($this->conexion->getConexion(), $sql);  
			if($res){

				header("location:../vista/bajas_cambios.php");
			}else{
				echo "<br>Error en eliminar  =(  ";
				echo mysqli_error($this->conexion->getConexion());
			}
		}



		//------------------------- Cambios ----------------------------------------------

		//------------------------- CONSULTAS ------------------------------------------------
		public function obtenerTodos(){
			$sql = "SELECT * FROM alumnos";
			$res = mysqli_query($this->conexion->getConexion(), $sql);  
			if($res){
				return $res;
			}else{
				echo "<br>Error en consulta  =(  ";
				echo mysqli_error($this->conexion->getConexion());
			}
		}

		public function obtenerNC($nc){
			$sql="SELECT * FROM alumnos WHERE numerocontrol LIKE '%$nc%'";
			$res=mysqli_query($this->conexion->getConexion(),$sql);
			if($res){
					return $res;
					
				}else{
					echo "Fracaso en la CONSULTA";
					echo mysqli_error($this->conexion->getConexion());
				}
		}

		public function obtenerN($n){
			$sql="SELECT * FROM alumnos WHERE nombre LIKE '%$n%'";
			$res=mysqli_query($this->conexion->getConexion(),$sql);
			if($res){
					return $res;
					
				}else{
					echo "Fracaso en la CONSULTA";
					echo mysqli_error($this->conexion->getConexion());
				}
		}

		public function obtenerAP($ap){
			$sql="SELECT * FROM alumnos WHERE primerapellido LIKE '%$ap%'";
			$res=mysqli_query($this->conexion->getConexion(),$sql);
			if($res){
					return $res;
					
				}else{
					echo "Fracaso en la CONSULTA";
					echo mysqli_error($this->conexion->getConexion());
				}
		}

		//==============================CAMBIOS=================================
		public function obtenerCambio($nc){
			$sql="SELECT * FROM alumnos WHERE numerocontrol = '$nc'";
			$res=mysqli_query($this->conexion->getConexion(),$sql);
			if($res){
					return $res;
					
				}else{
					echo "Fracaso en la CONSULTA";
					echo mysqli_error($this->conexion->getConexion());
				}
		}


		public function cambiar($nc,$nom,$app,$apm,$edad,$sem,$carr){

				$sql = "UPDATE alumnos SET nombre ='$nom', primerapellido = '$app', ssegundoapellido = '$apm', edad = $edad, semestre = $sem, carrer = '$carr' WHERE numerocontrol = '$nc'";

				$res=mysqli_query($this->conexion->getConexion(),$sql);
				if($res){
					//echo "Exito";
					header("location:../vista/bajas_cambios.php");
					echo "<script> alert('Modificado Correctamente...');</script>";
					
				}else{
					echo "Fracaso";
					echo mysqli_error($this->conexion->getConexion());
				}
		}


	}//class AlumnoDAO

?>