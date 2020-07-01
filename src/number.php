<?php

namespace Falabella;

class number {

    protected $value1;
    protected $value2;
    protected $word;
    
    
    public function __construct( $value1, $value2, $word)
    {
        $this->value1 = $value1; 
        $this->value2 = $value2; 
        $this->word = $word;
    }

    public function getWord()
    {
        return $this->word;
    }

    public function getValue1() 
    {
        return $this->value1;
    }

    public function getValue2() 
    {
        return $this->value2;
    }
   
}


?>