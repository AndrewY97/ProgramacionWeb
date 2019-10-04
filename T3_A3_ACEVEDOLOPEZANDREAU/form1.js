function binario() {
	var numero = document.getElementById('caja_num2').value;
	var2 = parseInt(numero);
	//alert(numero);
	alert("Tu numero en binario es:"+var2.toString(2));
}
function octal() {
	var numero = document.getElementById('caja_num2').value;
	var2 = parseInt(numero);
	//alert(numero);
	alert("Tu numero en octal es:"+var2.toString(8));
}
function hexadecimal() {
	var numero = document.getElementById('caja_num2').value;
	var2 = parseInt(numero);
	//alert(numero);
	alert("Tu numero en hexadecimal es:"+var2.toString(16));
}
function cadena(){
	var cadenas = document.getElementById('caja_cad').value;
	voc=0;
	conso=0;
	cadena2 = cadenas.split('');
	for (var i = 0; i <cadena2.length;i++) {
		if (cadena2[i] == "b"||cadena2[i]=='c'||cadena2[i]=='d'||cadena2[i]=='f'||cadena2[i]=='g'||cadena2[i]=='h'||cadena2[i]=='j'||cadena2[i]=='k'||cadena2[i]=='l'||cadena2[i]=='m'||cadena2[i]=='n'||cadena2[i]=='ñ'||cadena2[i]=='p'||cadena2[i]=='q'||cadena2[i]=='r'||cadena2[i]=='s'||cadena2[i]=='t'||cadena2[i]=='v'||cadena2[i]=='w'||cadena2[i]=='x'||cadena2[i]=='y'||cadena2[i]=='z') {
			conso+=1;
			//alert(cadena2[i]);
		}
		if (cadena2[i] == "B"||cadena2[i]=='C'||cadena2[i]=='D'||cadena2[i]=='E'||cadena2[i]=='F'||cadena2[i]=='G'||cadena2[i]=='H'||cadena2[i]=='K'||cadena2[i]=='L'||cadena2[i]=='M'||cadena2[i]=='N'||cadena2[i]=='Ñ'||cadena2[i]=='P'||cadena2[i]=='Q'||cadena2[i]=='R'||cadena2[i]=='S'||cadena2[i]=='T'||cadena2[i]=='V'||cadena2[i]=='W'||cadena2[i]=='X'||cadena2[i]=='Y'||cadena2[i]=='Z') {
			conso+=1;
			//alert(cadena2[i]);
		}
	}
	alert("Cantidad de consonantes:"+ conso);
}
function cadena2(){
	var cadena = document.getElementById('caja_cad').value;
	voc=0;
	cadena2 = cadena.split('');
	for (var i = 0; i <cadena2.length;i++) {
		if (cadena2[i]=='a'||cadena2[i]=='e'||cadena2[i]=='i'||cadena2[i]=='o'||cadena2[i]=='u') {
			voc+=1;
		}
		if (cadena2[i]=='A'||cadena2[i]=='E'||cadena2[i]=='I'||cadena2[i]=='O'||cadena2[i]=='U') {
			voc+=1;
		}
		
	}
	alert("Cantidad de vocales:"+ voc);
	//alert("Cantidad de consonantes:"+ conso);
}

function busca(){
	var cadena = document.getElementById('caja_cad').value;
	l=document.getElementById('caja_let').value;
	//alert(l);
	let=0;
	cadena2 = cadena.split('');
	for (var i = 0; i <cadena2.length;i++) {
		if (cadena2[i]==l){
			let+=1;
			//alert("Encotre");
		}
	}
	alert("Tu letra ha aparecido" + let + "veces");
}


function loca(){
	var cadena = document.getElementById('caja_cad').value;
	cadena2 = cadena.split('');
	for (var i = 0; i <cadena2.length;i++) {
		if( i % 2 !=0){
			cadena2[i]=cadena2[i].toUpperCase();
			//alert(cadena2)
			//cadena2[i]=toUpperCase(cadena2[i]);
		}
	}
	alert(cadena2);
}

function curp(){
	var name = (document.getElementById('caja_nom1').value).toUpperCase();
	ape1 = (document.getElementById('caja_ape1').value).toUpperCase();
	ape2 = (document.getElementById('caja_ape2').value).toUpperCase();
	dia = document.getElementById('caja_dia').value;
	mes = document.getElementById('caja_mes').value;
	año = document.getElementById('caja_año').value;
	sexo = document.getElementById('caja_sex').value;
	edo = document.getElementById('caja_est').value;
	c=0
	n2 = name.split('');
	ap12 = ape1.split('');
	ap22 = ape2.split(''); 
	//alert(n2+ap12+ap22); 
	for (var i = 0; i <ap12.length;i++) {
		rfc=ap12[0]
	}
	for (var i = 0; i <ap12.length;i++) {
		rfc=ap12[0]
	}
	for (var i = 0; i <ap22.length;i++) {
		rfc3=ap22[0]
	}
	for (var i = 0; i <n2.length;i++) {
		rfc4=n2[0]
	}
	for (var i = 1; i <ap12.length;i++) {
		if ((ap12[i]=='A'||ap12[i]=='E'||ap12[i]=='I'||ap12[i]=='O'||ap12[i]=='U') && c==0) {
			rfc2=ap12[i];
			//alert(ap12[i]);
			c+=1
		}
	}
	for (var i = 1; i <edo.length;i++) {
		edo2=edo[0]
	}
	x=rfc+rfc2+rfc3+rfc4+año+mes+dia+sexo+edo2;

	alert("Tu CURP es:"+x);
	//alert(c);
}

	