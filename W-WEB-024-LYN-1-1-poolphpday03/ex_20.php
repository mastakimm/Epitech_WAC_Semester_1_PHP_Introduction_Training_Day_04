<?php
function spupof(string $str){
    $str = strtolower($str);
    $longueur = strlen($str);
    $resultat = '';

    for($i=0;$i < $longueur;$i++){
        $caractere = $str[$i];
        if($caractere === "z"){
            $caractere_suivant = "a";
        } elseif($caractere >= "a" && $caractere < "z"){
            $caractere_suivant = chr(ord($caractere) +1);
        } else {
            $caractere_suivant = $caractere;
        }
    $resultat .= $caractere_suivant;
    }
    echo $resultat . PHP_EOL;
}
?>