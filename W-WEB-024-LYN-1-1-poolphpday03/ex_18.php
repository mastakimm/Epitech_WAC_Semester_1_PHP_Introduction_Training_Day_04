<?php

function get_args(...$arg){
    $array = func_get_args();
    return $array;
}

function get_last_arg(...$args){
    $args = func_get_args();
    return end($args);
}

