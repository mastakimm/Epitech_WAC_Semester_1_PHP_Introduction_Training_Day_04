<?php

function print_range(int $min){

    while($min > 42){
        echo $min . PHP_EOL;
        return;
    }

    do {
        echo $min . PHP_EOL;
        $min++;
    } while($min < 43);

    return $min === 42 ? true : false;
    
}




