<?php

function return_calls(){
    static $count = 0;
    $count++;
    return $count * 3;
}
