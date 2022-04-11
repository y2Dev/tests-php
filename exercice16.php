<?php
    function plusPetit($tabNombre){
        $x=$tabNombre[0] ;
        foreach ($tabNombre as $nombre) {
        
            if ($nombre < $x) {
             $x=$nombre ;
            } 
        }
        return $x ;
    }

    $newTableau = [45 , 150, 50] ;


    echo plusPetit($newTableau) ;

?>