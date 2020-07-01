<?php

namespace Falabella;

class number {

    private $value1;
    private $value2;
    private $word;
    
    
    public function __construct($value1, $value2, $word)
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
