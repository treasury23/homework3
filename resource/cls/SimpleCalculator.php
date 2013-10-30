<?php

namespace resource\cls;

class SimpleCalculator extends AbstractCalculator implements CalculatorInterface
{
    protected $number1;
    protected $operator;
    protected $number2;

    function __construct ($number1, $operator, $number2)
    {
        $this->number1=$number1;
        $this->operator=$operator;
        $this->number2=$number2;
    }

    public function getNumber1()
    {
        return $this->number1;
    }

    public function setNumber1($number1)
    {
        return $this->number1 = $number1;
    }

    public function getOperator()
    {
        return $this->operator;
    }

    public function setOperator($operator)
    {
        return $this->operator = $operator;
    }

    public function getNumber2()
    {
        return $this->number2;
    }

    public function setNumber2($number2)
    {
        return $this->number2 = $number2;
    }

    public function square()
    {
        // TODO: Implement square() method.
    }

    public function percentage()
    {
        // TODO: Implement percentage() method.
    }

    public function decision()
    {
        switch ($this->operator) {
            case '+':
                $result = $this->number1 + $this->number2;
                break;
            case '-':
                $result = $this->number1 - $this->number2;
                break;
            case '*':
                $result = $this->number1 * $this->number2;
                break;
            case '/':
                if ($this->number2 == 0) {
                    $result = 'you can not divide by zero';
                } else {
                    $result = $this->number1 / $this->number2;
                }
                break;
            default:
                $result = "unknown operator '$this->operator'";
        }
        return $result;
    }
    public function showDecision()
    {
        $result = $this->getNumber1()." ".$this->getOperator()." ".$this->getNumber2()." = ".$this->decision();
        return $result;
    }
}