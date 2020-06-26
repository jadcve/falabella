<?php

/**
 * Created by Jose Alain Diaz C.
 * Date: 26/06/2020
 */

 function main() {
      $result ='';
        for ( $i=1;$i<=100;$i++) 
        {
            $valueToCheck = $i;
            $valueToCheck = getDiv($valueToCheck,5,3,"Linio");
            $valueToCheck = getDiv($valueToCheck,3,3,"Falabella");
            $valueToCheck = getDiv($valueToCheck,5,5,"IT");
            $result .= $valueToCheck.",";
        }
      return $result;
} 

function getDiv($value,$firstValue,$secondValue,$returnWord) {
  
        if (is_numeric($value) && ($value % $firstValue==0) && ($value % $secondValue==0))
        {
          return $returnWord;
        } 
        return $value;
}


 




