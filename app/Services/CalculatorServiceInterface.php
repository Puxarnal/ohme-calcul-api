<?php

namespace App\Services;

interface CalculatorServiceInterface
{
    /**
     * Adds to numbers
     * @param int|float $a
     * @param int|float $b
     * @return int|float
     */
    public function add($a, $b);

    /**
     * Substracts a number from another one
     * @param int|float $a The number from which another number will be substracted
     * @param int|float $b The number which will be substracted from the other one
     * @return int|float
     */
    public function substract($a, $b);

    /**
     * Multiplies a number by another one
     * @param int|float $a
     * @param int|float $b
     * @return int|float
     */
    public function multiply($a, $b);

    /**
     * Divides a number by another one
     * @param int|float $a The dividend
     * @param int|float $b The divisor
     * @return int|float
     */
    public function divide($a, $b);
}