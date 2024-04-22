<?php

function get_array_key(array $arr, $value){
    foreach($arr as $key => $valeur){
        $cle = $key;
        if($valeur === $value){
            return $cle;
        }
    }
}