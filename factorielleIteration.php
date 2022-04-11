<?php
    function factorielle ($nombre){

        $fac=1;
        for ($i=1; $i <= $nombre; $i++) { 
            //echo $fac*$i."=".$fac."x".$i."<br>";
            $fac=$fac*$i ;

        }
        return $fac ;
    }
    
    echo factorielle (8)
?>