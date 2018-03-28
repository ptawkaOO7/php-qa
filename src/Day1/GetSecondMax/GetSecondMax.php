<?php

namespace Day1\GetSecondMax;

class GetSecondMax
{

    /**
     * @param array $arr
     * @return int
     */
    public function getSecond(array $arr)
    {
        array_unique($arr);
        rsort($arr);
        return $arr[1];
    }
}