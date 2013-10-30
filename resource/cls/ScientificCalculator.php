<?php

namespace resource\cls;

class ScientificCalculator extends AbstractCalculator implements CalculatorInterface
{
    protected $squareNumber;

    /**
     * @param mixed $squareNumber
     */
    public function setSquareNumber($squareNumber)
    {
        $this->squareNumber = $squareNumber;
    }

    /**
     * @return mixed
     */
    public function getSquareNumber()
    {
        return $this->squareNumber;
    }

    public function square()
    {
        $result = sqrt($this->getSquareNumber());
        return $result;
    }

    public function percentage()
    {

    }
}
