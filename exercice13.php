<?php
    function premierElementTableau($tableau){
        return $tableau[0];
    }

    $newTableau = ["element1" , "element2", "element3"] ;


    echo premierElementTableau($newTableau);

?>