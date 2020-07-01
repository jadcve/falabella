<?php

use Falabella\Calculo;
use Falabella\Number;


class FalabellaTest extends PHPUnit\Framework\TestCase {

    public function test_fail3()
    {
        $this->calc = new calculo();
        $div31 = new number(3, 1, 'Falabella');
        $result = $this->calc->getResult(27,$div31);
        $this->assertSame(
            'Falabella',$result,
            'Message! ');
         
    }



   
}