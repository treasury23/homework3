<?php

namespace Resource\Cls;

class FinancialCalculator extends AbstractCalculator implements CalculatorInterface
{
    protected $sumCredit;
    protected $rate;
    protected $dayMonth;

    /**
     * @param mixed $dayMonth
     */
    public function setDayMonth($dayMonth)
    {
        $this->dayMonth = $dayMonth;
    }

    /**
     * @return mixed
     */
    public function getDayMonth()
    {
        return $this->dayMonth;
    }

    /**
     * @param mixed $rate
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
    }

    /**
     * @return mixed
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param mixed $sumCredit
     */
    public function setSumCredit($sumCredit)
    {
        $this->sumCredit = $sumCredit;
    }

    /**
     * @return mixed
     */
    public function getSumCredit()
    {
        return $this->sumCredit;
    }

    public function percentage()
    {
        $result = $this->getSumCredit() * $this->getDayMonth() * $this->getRate() / 365;
        return round($result,0);
    }

    public function square()
    {

    }
}