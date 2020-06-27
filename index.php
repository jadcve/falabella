<?php

/**
 * Created by Jose Alain Diaz C.
 * Date: 26/06/2020
 */

require_once 'test.php';
require_once 'main.php';
 
/* 
 *  print result
 */ 

print_r(main());


/*
* Testing 
*/

//var_dump(test());

switch(test())
{
    case true:
        echo '<h3>'.'Passed Successfully!!!'.'</h3>';
    break;

    case false:
        echo '<h3>'.'Oops something went wrong!!!'.'</h3>';
    break;
}





