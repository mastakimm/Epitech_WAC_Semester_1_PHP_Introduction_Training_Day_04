<?php


function aff_array(array $my_array){
    foreach($my_array as &$value){
        echo $value . PHP_EOL;
    }
    return count($my_array);
}



