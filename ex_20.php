<?php
function continue_cat(){
    while(true){
        $entree = fgets(STDIN);

        if($entree === "EOF"){
            echo $entree; 
            continue;
        }
        echo $entree; 
        return;  
    }
}
continue_cat();
?>