<?php

function is_similar($a, $b){
    if($a === $b){
        echo "Same type and value.\n";
        return;
    }

    if($a == $b){
        echo "Same value.\n";
    } 

    if (gettype($a)=== gettype($b)){
        echo "Same type.\n";
    }
}

