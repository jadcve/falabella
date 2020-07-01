<?php

namespace Falabella;

class calculo {

    public function getResult ($num,$value)
    {
        if ( is_numeric($num) && ($num % $value->getValue1()==0) && ($num % $value->getValue2()==0) )
            {
                return  $value->getWord(); 
            } 
        return $num;
    
    }

}
?>