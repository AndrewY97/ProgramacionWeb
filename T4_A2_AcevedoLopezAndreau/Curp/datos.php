<?php
     $ap = htmlspecialchars($_POST['ap']);
     $am = htmlspecialchars($_POST['am']);
     $nom = htmlspecialchars($_POST['nom']);
     $ap=strtolower($ap);
     $am=strtolower($am);
     $nom=strtolower($nom);
     $sexo =htmlspecialchars($_POST['sexo']);
     $dia = htmlspecialchars($_POST['dia']);
     $mes = htmlspecialchars($_POST['mes']);
     $ao = htmlspecialchars($_POST['ao']);
     $estado = htmlspecialchars($_POST['estado']);
     $min=4;
     $minl=2;
     $est=0;

    $l1=substr($ap,0,1);
    $l2="";
    for($i=0; $i<=strlen($ap); $i++){
        if($ap[$i]=="a"||$ap[$i]=="e"||$ap[$i]=="i"||$ap[$i]=="o"||$ap[$i]=="u"){
            $l2=$ap[$i];
            $i=strlen($ap);
        }
    }
    $l3=substr($am,0,1);
    
    
    
    $resultado = "";
    $array = explode(" ", $nom);
    for ($i = 0; $i < sizeof($array); $resultado = $array[$i][0], $i++);

    $l5= substr($ao,2,2);
    $l6= substr($ao,4,4);
    $l7="";
    for($i=1; $i<=strlen($ap); $i++){
        if($ap[$i]!="a"&&$ap[$i]!="e"&&$ap[$i]!="i"&&$ap[$i]!="o"&&$ap[$i]!="u"){
            $l7=$ap[$i];
            $i=strlen($ap);
        }
    }

    $l8="";
    for($i=1; $i<=strlen($am); $i++){
        if($am[$i]!="a"&&$am[$i]!="e"&&$am[$i]!="i"&&$am[$i]!="o"&&$am[$i]!="u"){
            $l8=$am[$i];
            $i=strlen($am);
        }
    }

    $aux=sizeof($array);
    $aux=$aux-1;
    $nom=$array[$aux];
    $l9="";

    for ($i = 1; $i <= strlen($nom); $i++){
        if($nom[$i]!="a"&&$nom[$i]!="e"&&$nom[$i]!="i"&&$nom[$i]!="o"&&$nom[$i]!="u"){
            $l9=$nom[$i];
            $i=strlen($nom);
        }
    }
            
    $curp=$l1.$l2.$l3.$resultado.$l5.$l6.$mes.$dia.$sexo.$estado.$l7.$l8.$l9;
    $curp=strtoupper($curp);
    echo'<br>
    <br>
    <label for="">CURP</label>
    <input type="text" name="curp" id="curp" value="'.$curp.'">
    <br>
    <br>
    ';

?>