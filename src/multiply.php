<?php

class multiply // (определение класса) описывает умножение и передаёт результат
{
    // определяем два свойства
    public $num1 = 0;
    public $num2 = 0;
    // определяем конструктор класса
    function __construct($num1, $num2) {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }
    // метод, который складывает два числа
    function a_multiply_b() {
        return $this->num1 * $this->num2;
    }
}