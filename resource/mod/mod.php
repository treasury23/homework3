<?php

include_once 'vendor/autoload.php';

use resource\cls\ScientificCalculator;
use resource\cls\FinancialCalculator;
use resource\cls\SimpleCalculator;

function InitScientificCalculator()
{
    $obj = new ScientificCalculator();
    $obj->setType('ScientificCalculator');
    $obj->setManufacturer('Casio');
    $obj->setWeight('340');
    $obj->setColor('white');
    $obj->setSize('210*155*30');
    $obj->setSquareNumber(9);
    $obj->square();
    return $obj;
}

function InitFinancialCalculator()
{
    $obj = new FinancialCalculator();
    $obj->setType('FinancialCalculator');
    $obj->setManufacturer('Sitizen');
    $obj->setWeight('390');
    $obj->setColor('black');
    $obj->setSize('310*240*60');
    $obj->setSumCredit('50000');
    $obj->setDayMonth('31');
    $obj->setRate('0.2');
    $obj->percentage();
    return $obj;
}

function InitSimpleCalculator()
{
    $obj = new SimpleCalculator(123, '+', 123);
    $obj->setType('SimpleCalculator');
    $obj->setManufacturer('Assistant');
    $obj->setWeight('120');
    $obj->setColor('silver');
    $obj->setSize('100*80*30');
    $obj->decision();
    return $obj;
}
