<?php

function print_until(int $max){
    if($max < 0){
        echo "Boulet !\n";
        return false;
    }
    $i = 0;

    while($i <= $max){
        echo $i++ . PHP_EOL;
    }
    return true;
}
