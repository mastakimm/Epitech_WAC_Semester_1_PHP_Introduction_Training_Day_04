<?php

function print_calls(){
    static $count = 0;
    $count++;
    echo $count;
}
