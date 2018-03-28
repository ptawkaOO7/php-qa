<?php

namespace Day1\CountIt;

class CountIt
{
    /**
     * @param int $numeral
     * @param int $number
     * @return int
     */
    public function count(int $number, int $numeral)
    {
        $this->intNotNumeral($numeral);
        return substr_count($number, $numeral);
    }


    /**
     * @param $numeral
     */
    private function intNotNumeral($numeral)
    {
        if ($numeral<0 or $numeral>=10) {
            throw new \InvalidArgumentException;
        }
    }
}