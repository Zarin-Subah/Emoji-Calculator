<?php

class Emoji_Calc{ // class for emoji calulator
    public $operator; // here operators are Alian(addition), Skull(Substruction), Ghost(multiplication) and Screaming(Division)
    public $number1; 
    public $number2;


    public function __construct(string $one, int $two, int $three){
        $this->operator = $one;
        $this->number1 = $two;
        $this->number2 = $three;
    }

    
    public function emoji_calculator(){ // create a function to calculate
     switch ($this->operator) { // create different cases for different emoji
         case 'Alian': // When users choose the Alian emoji it will enter to this case and will add two number
            $result = $this->number1 + $this->number2; 
            return $result;             
            break;
        case 'Skull': // When users choose the Skull emoji it will enter to this case and will do subtraction 
            $result = $this->number1 - $this->number2;
            return $result;             
            break;
        case 'Ghost': // When users choose the Ghost emji it will enter to this case and will multliply two number   
             $result = $this->number1 * $this->number2;
             return $result;             
             break;
        case 'Screaming': // When users choose the Screaming emoji it will enter to this case and will divide numbers
             $result = $this->number1 / $this->number2;
             return $result;             
             break;

     }
    }

}