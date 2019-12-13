<?php
     if(isset($_POST)&&!empty($_POST)){
        $num1=htmlspecialchars($_POST['nDecimal']);
        $num=(int)$num1;
        $b=decbin($num);
        $o=decoct($num);
        $h=dechex($num);
        echo'<br>
        <br>
        <label for="">Numero Binario</label>
        <input type="text" name="nBinario" id="nBinario" value="'.$b.'">
        <br>
        <br>';
        echo'<label for="">Numero Octal</label>
        <input type="text" name="nOctal" id="nOctal" value="'.$o.'">
        <br>
        <br>';
        echo'<label for="">Numero Hexadecimal</label>
        <input type="text" name="nHexa" id="nHexa" value="'.$h.'">';
     }else{
         echo"Faltan datos";
     }
?>