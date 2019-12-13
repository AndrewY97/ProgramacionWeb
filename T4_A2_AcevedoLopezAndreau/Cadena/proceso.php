<?php
    $cad=htmlspecialchars($_POST['cad']);
    $letra=htmlspecialchars($_POST['letra']);
    $numeroVocales = preg_match_all('/[aeiouAEIOU]/i',$cad);
    $numeroCon = preg_match_all('/[qwrtypsdfghjklñzxcvbnmQWRTYPSDFGHJKLÑZXCVBNM]/i',$cad);
    $apa=substr_count($cad,$letra,0,(strlen($cad)));
    $cadL="";
    for ($i=0; $i < strlen($cad); $i++) { 
        if(($i%2)==0){
            $cadL[$i]=strtoupper(substr($cad,$i,($i+1)));
        }
        else{
            $cadL[$i]=strtolower(substr($cad,$i,($i+1)));
        }
    }
    echo'<br>
    <br>
    <label for="">Vocales</label>
    <input type="text" name="vocales" id="vocales" value="'.$numeroVocales.'">
    <br>
    <br>
    <label for="">Consonantes</label>
    <input type="text" name="consonantes" id="consonantes" value="'.$numeroCon.'">
    <br>
    <br>
    <label for="">Numero de veces que aparece</label>
    <input type="text" name="nLetra" id="nLetra" value="'.$apa.'">
    <br>
    <br>
    <label for="">Cadena loca</label>
    <input type="text" name="cLoca" id="cLoca" value="'.$cadL.'">';
?>