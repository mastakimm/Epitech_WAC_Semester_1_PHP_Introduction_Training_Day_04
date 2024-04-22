<?php

function calc(string $operation, int $nb1, int $nb2){
    switch($operation){
        case "+"     : 
            return $nb1 + $nb2;
            break;
        case "-" : 
            return $nb1 - $nb2;
            break;
        case "/" : 
            if($nb2 == 0){
                return null;
            }
            return $nb1 / $nb2;
            break;
        case "*" : 
            return $nb1 * $nb2;
            break;
        case "%" : 
            return $nb1 % $nb2;
            break;
    }
}