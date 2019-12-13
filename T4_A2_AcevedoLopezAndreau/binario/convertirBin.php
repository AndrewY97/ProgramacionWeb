<?php
     if(isset($_POST)&&!empty($_POST)){
        $num1=htmlspecialchars($_POST['nDecimal']);
        $num=(int)$num1;
        $b=decbin($num);
        echo'<br>
        <br>
        <label for="">Numero Binario</label>
        <input type="text" name="nBinario" id="nBinario" value="'.$b.'">
        <br>
        <br>';
     }else{
         echo"Faltan datos";
     }
?>