<?php
    function plusPetit($var1, $var2, $var3)
    {
        $trouve=$var1;
        if ($var1 > $var2) {
             $trouve=$var2 ;
        } 

        if ($trouve > $var3) {
            $trouve=$var3 ;
        }
        return $trouve ;
    }

    echo plusPetit(10, 5, 50)

?>