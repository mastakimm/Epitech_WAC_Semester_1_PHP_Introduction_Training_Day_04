<?php

function print_double_array(array $my_array){
    foreach($my_array as $value){
        foreach($value as $valeur){
            echo $valeur . PHP_EOL;
        }
    }
}