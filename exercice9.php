<?php
    function estllMajeure($age)
    {
        if ($age>=18) {
            return true ;
        }else{
            return false ;
        }
     
    }

    //echo estllMajeure(34)
    var_dump(estllMajeure(6))
?>