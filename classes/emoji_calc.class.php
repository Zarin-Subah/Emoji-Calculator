<?php

class Emoji_Calc{
    public $operator;
    public $number1;
    public $num2;


    public function __construct(string $one, int $two, int $three){
        $this->operator = $one;
        $this->number1 = $two;
        $this->number2 = $three;
    }


    public function emoji_calculator(){
     switch ($this->operator) {
         case 'Alian':
            $result = $this->number1 + $this->number2;
            return $result;             
            break;
        case 'Skull':
            $result = $this->number1 - $this->number2;
            return $result;             
            break;
        case 'Ghost':    
             $result = $this->number1 * $this->number2;
             return $result;             
             break;
        case 'Screaming':    
             $result = $this->number1 / $this->number2;
             return $result;             
             break;

     }
    }

}