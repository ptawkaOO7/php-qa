<?php

namespace Day1\FizzBuzz;

class FizzBuzz
{

    /**
     * @param int $number
     * @return string
     */
    public function get(int $number)
    {
        $this->guardAgainstNull($number);
        if ($number % 3 ==  0){
            if ($number % 5 == 0){
                return "fizzbuzz";
            }
            return "fizz";
        } elseif ($number % 5 == 0){
            return "buzz";
        }
        return $number;
    }

    /**
     * @param int $number
     */
    private function guardAgainstNull(int $number)
    {
        if ($number == 0) {
            throw new \InvalidArgumentException;
        }
    }
}