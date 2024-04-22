<?php

function break_cat(){
    while($line = fgets(STDIN)){
        if($line == "EOF\n"){
            
            echo $line;
            break;
        }

        echo $line;
    }
}

break_cat();