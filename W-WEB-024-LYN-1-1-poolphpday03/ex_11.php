<?php

$nb_a = 1;
$nb_b = 2;

function my_sub(){
    GLOBAL $nb_a, $nb_b;
    
    return $nb_a = $nb_a - $nb_b;
}