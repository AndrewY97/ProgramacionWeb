





<?php 

	session_start();
	$conexion = mysqli_connect('localhost:3306','root','','usuarios_escuela_web');

	$error_usuario = "";
	$error_password = "";
	$error_vacio = "";

	if( isset($_POST['caja_usuario']) && isset($_POST['caja_usuario']) ){
			$u = $_POST['caja_usuario'];
			$c = $_POST['caja_contraseña'];

		if(!empty($_POST['caja_usuario']) &&  !empty($_POST['caja_usuario'])){

			if (strlen($_POST['caja_usuario']) >= 8 ) {
				
				
				$u = limpiar_cadena($u);
				$c = limpiar_cadena($c);

				echo $u;
				echo "<br>";
				echo $c;

				//proceso de ALTA de usuarios
				$sql = $conexion->prepare("INSERT INTO usuarios VALUES(?, ?)");
				$sql->bind_param('ss', $u, $c);

				if($sql->execute()){
					$_SESSION['usuario_agregado'] = "Usuario agregado con EXITO";
					header();
				}else
					$_SESSION['usuario_agregado'] = "ERROR en la agregacion de USUARIO";


				$sql->close();
				//proceso de ALTA -----------------------------------------

				// Enviar un correo para CONFIRMAR REGISTRO !!!!!!!!!!!!!!!!!!!!!

				header("location: ../vista/menu_principal.php ");


			}else{
				//$error_usuario = "Usuario debe ser de 8 caracteres";
				$_SESSION['error_usuario'] = "* Usuario debe ser de 8 caracteres";
				$_SESSION['dato_usuario'] = $u;
				//echo "error cantidad caracteres";
				header("Location:../vista/formulario_registrar_usuario.php");
			}

		}else{
				$error_usuario = "Usuario VACIO";
				$error_password = "Contraseña VACIA";
				$error_vacio = "error cajas VACIAS";
			}
	}

	
	function limpiar_cadena($cadena){
		$cadena = trim($cadena);
		$cadena = stripslashes($cadena);
		$cadena = htmlspecialchars($cadena);
		return $cadena;
	}


 ?>