<?php

use Falabella\Calculo;
use Falabella\Number;


class FalabellaTest extends PHPUnit\Framework\TestCase {

    public function test_compare_number()
    {
        $this->calc = new calculo();

        $div31 = new number(3, 1, 'Falabella');
        $this->assertSame(
            'Falabella',$this->calc->getResult(30,$div31),
            'The result obtained is not the same as expected! '
        );
         
        $div51 = new number(5, 1, 'IT');            
        $this->assertSame(
            'IT',$this->calc->getResult(35,$div51),
            'The result obtained is not the same as expected! '
        );    


        $div35 = new number(3, 5, 'Linio');
        $this->assertSame(
            'Linio',$this->calc->getResult(15,$div35),
            'The result obtained is not the same as expected! '
        );    
    }



   
}