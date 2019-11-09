




<?php


	$conexion = mysqli_connect('localhost:3306','root','','usuarios_escuela_web');

	if($conexion){
			

		$u = $_POST['caja_usuario'];
		$c = $_POST['caja_contraseña'];

		$u_cifrado = sha1($u);
		$c_cifrado = sha1($c);

		//echo $u_cifrado;
		//echo $c_cifrado;

		$sql = "SELECT * FROM usuarios WHERE usuario2='$u' AND pass = '$c'";

		//echo "<br>" . $sql;

		$res = mysqli_query($conexion, $sql);
		//echo "<br>";
		//var_dump($res);
		//var_dump(mysqli_error($conexion));

		if(mysqli_num_rows($res)==1){
			//echo "Bienvedido " . $u_cifrado;
			session_start();
			$_SESSION['autenticado'] = true;
			$_SESSION['usuario'] = $u;
			header("location:../vista/menu_principal.php");
		}
		else{
			header("location:../vista/login_usuario.php");
			//echo "ACCESO DENEGADO ";
		}

	}else{
			die("ERROR de Conexion" .mysqli_connect_error() .mysqli_connect_errno());
			}
?>
