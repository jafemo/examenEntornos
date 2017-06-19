<?php

function primo($numero){
    $contador=0;
   
    for($i=2;$i<=$numero;$i++){
        if($numero%$i==0) {
            if(++$contador>1)
                return false;
        }
    }
    return true;
}



?>
