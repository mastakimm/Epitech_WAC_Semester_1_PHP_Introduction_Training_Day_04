<?php

function goto_is_evil(){
    $i = 42;
    $result = "";
    
    a: 
        $result .= "wac\n";
        $i--;
        if($i > 0){
            goto a;
        }
    echo $result;
}
