<?php

/*
 * Created by Jose Alain Diaz C.
 * Date: 26/06/2020
 */

 function main() {
      $result ='';
        for ( $i=1;$i<=100;$i++) 
        {
            $valueToCheck = $i;
            $valueToCheck = getDiv($valueToCheck,5,3);
            $valueToCheck = getDiv($valueToCheck,3,3);
            $valueToCheck = getDiv($valueToCheck,5,5);
            $result .= $valueToCheck.",";   
            //$result[$i] = $valueToCheck;         
        }
      return $result;
} 


function getDiv($value,$firstValue,$secondValue)
{
  if (is_numeric($value) && ($value % $firstValue==0) && ($value % $secondValue==0))
  {
     $sum = $firstValue + $secondValue;
     
    switch($sum)
    {
        case 8:
            return 'Linio';
        break;

        case 6:
            return 'Falabella';
        break;

        case 10:
          return 'IT';
        break;
         
    }

  } 
  return $value;
}

 




