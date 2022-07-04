<?php

class Emoji_Calc{
    public $operator;
    public $number1;
    public $number2;


    public function __construct(string $one, int $two, int $three){
        $this->operator = $one;
        $this->number1 = $two;
        $this->number2 = $three;
    }

}