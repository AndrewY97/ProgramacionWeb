<?php

	echo "<br>";
	$N = $_POST['caja_nom1'];
	$A1 = $_POST['caja_ape1'];
	$A2 = $_POST['caja_ape2'];
	$dd = $_POST['caja_dia'];
	$mm = $_POST['caja_mes'];
	$aa = $_POST['caja_año'];
	$est = $_POST['caja_est'];
	$sex = $_POST['caja_sex'];

	$x1= $A1[0];
	$c=0;
	$A11;
	
	//echo $A11;


	//echo $A11;

	for ($i=1; $i < strlen($A1); $i++) { 
		if (($A1[$i]=='A'||$A1[$i]=='E'||$A1[$i]=='I'||$A1[$i]=='O'||$A1[$i]=='U')&& $c===0) {
			//echo "<br>$A1[$i]";
			$c+=1;
			$A11=$A1[$i];
		}
	}

	$RFC =$x1.$A11.$A2[0].$N[0].$aa.$mm.$dd.$sex.$est[0];

	echo "<br>TU CURP ES:".$RFC;

	//-------------Numeros-----------------//

	$Num= $_POST['caja_num'];

	echo "<br>Tu numero:".$Num;

	echo "<br>Numero en binario:".decbin($Num);
	echo "<br>Numero en octal:".decoct($Num);
	echo "<br>Numero en hexadecimal:".dechex($Num);



	//---------------Letras---------------//

	$let= $_POST['caja_cad'];
	$let2= $_POST['caja_let'];
	$cc=0;
	$cv=0;
	$cl=0;


	for ($i=0; $i < strlen($let); $i++) { 
		if (($let[$i]=='A'||$let[$i]=='E'||$let[$i]=='I'||$let[$i]=='O'||$let[$i]=='U')) {
			//echo "<br>$A1[$i]";
			$cv+=1;
		}
	}

	for ($i=0; $i < strlen($let); $i++) { 
		if (($let[$i]=='B'||$let[$i]=='C'||$let[$i]=='D'||$let[$i]=='F'||$let[$i]=='G'||$let[$i]=='H'||$let[$i]=='J'||$let[$i]=='L'||$let[$i]=='M'||$let[$i]=='N'||$let[$i]=='P'||$let[$i]=='Q'||$let[$i]=='R'||$let[$i]=='S'||$let[$i]=='T'||$let[$i]=='V'||$let[$i]=='W'||$let[$i]=='X'||$let[$i]=='Y'||$let[$i]=='Z')) {
			//echo "<br>$A1[$i]";
			$cc+=1;
		}
	}

	echo "<br>Tu palabra:".$let;
	echo "<br>Cantidad de vocales:".$cv;
	echo "<br>Cantidad de consonantes:".$cc;

	for ($i=0; $i < strlen($let); $i++) { 
		if (($let[$i]===$let2)) {
			//echo "<br>$A1[$i]";
			$cl+=1;
		}
	}

	echo "<br>Letra a buscar:".$let2;
	echo "<br>Cantidad de veces que aparece:".$cl;
		

?>