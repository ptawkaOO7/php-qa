<?php

namespace Day1\GaussNeedsHelp;

class GaussNeedsHelp
{
    /**
     * @param $number
     * @return int
     */
    public function get($number)
    {
        $this->guardAgainstFloatNumber($number);
        $this->guardAgainstString($number);
        $result = 0;
        $signMultiplier = 1;

//создаем правило для отрицательных чисел
        if($number < 0) {
            $signMultiplier = -1;
            $number = abs($number);
        }

        for ($i = 0; $i <= $number; $i++) {
            $result += $i;
        }
        return $result * $signMultiplier;
    }

    /**
     * @param $number
     */
    private function guardAgainstFloatNumber($number)
    {
        if (is_float($number)) {
            throw new \InvalidArgumentException;
        }
    }

    /**
     * @param $number
     */
    private function guardAgainstString($number)
    {
        if (is_string($number)) {
            throw new \InvalidArgumentException;
        }
    }
}