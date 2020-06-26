<?php

/**
 * Created by Jose Alain Diaz C.
 * Date: 26/06/2020
 */


 //Here you can modify the expected values to check the exit of the program





  function Unitest()
  {
    $fp = fopen("file_test.txt", "r");
    while (!feof($fp)){
        $linea = fgets($fp);
        return (main(1,100) == $linea);
    }
    fclose($fp);
  }


  