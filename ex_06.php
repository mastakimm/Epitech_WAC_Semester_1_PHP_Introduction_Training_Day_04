<?php

function get_angry_bird(int $nbr){
    $piou = "";
    for($i=1; $i <= $nbr; $i++){
        $piou .= "piou";
    }

    return $piou . PHP_EOL;
}
