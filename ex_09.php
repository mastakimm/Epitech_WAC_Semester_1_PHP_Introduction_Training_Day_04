<?php

function multiples(int $nbr){
   for($i=0; $i <= 200000;$i++){
        if($i % $nbr === 0){
            echo $i . PHP_EOL;
        }
    }
}

