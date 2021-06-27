<?php

namespace App\Services;

class CalculatorService implements CalculatorServiceInterface
{
    /**
     * @inheritdoc
     */
    public function add($a, $b)
    {
        return $a + $b;
    }

    /**
     * @inheritdoc
     */
    public function substract($a, $b)
    {
        return $a - $b;
    }

    /**
     * @inheritdoc
     */
    public function multiply($a, $b)
    {
        return $a * $b;
    }

    /**
     * @inheritdoc
     */
    public function divide($a, $b)
    {
        return $a / $b;
    }

    public function nested(array $parts)
    {
        $result = 0;
        $operator = '';

        foreach ($parts as $part) {
            if (is_array($part)) {
                $part = $this->nested($part);
            }

            if (is_numeric($part)) {
                switch ($operator) {
                    case '-':
                        $result = $this->substract($result, $part);
                        break;
                    case '*':
                        $result = $this->multiply($result, $part);
                        break;
                    case '/':
                        $result = $this->divide($result, $part);
                        break;
                    case '+':
                    default:
                        $result = $this->add($result, $part);
                        break;
                }

                $operator = '';

            } elseif (!$operator) {
                $operator = $part;
            }
        }

        return $result;
    }
}