<?php
    function dernierElementTableau($tableau){
        return count($tableau)-1 ;
    }

    $newTableau = ["element1" , "element2", ""] ;
    //var_dump($newTableau);


    echo dernierElementTableau($newTableau);

?>