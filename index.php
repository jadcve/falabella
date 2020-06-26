<?php

/**
 * Created by Jose Alain Diaz C.
 * Date: 26/06/2020
 */

require_once 'test.php';
require_once 'main.php';
 
/* 
 *  Main function
 */ 

echo '<h2>'. main()."<br /> <br /> </h2>";


/*
* Testing 
*/

//var_dump(test());

switch(Unitest())
{
    case true:
        echo '<h2>'.'Passed Successfully!!!'.'</h2>';
    break;

    case false:
        echo '<h2>'.'Oops something went wrong!!!'.'</h2>';
    break;
}


//echo test2();


