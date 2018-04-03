<?php

namespace Day2\HealthyCar;

class HealthyCar
{
    /**
     * @param array $stones
     * @return int
     */
    public function moveStones(array $stones)
    {
        $capacity = 30000;
        $rides = 0;
        rsort($stones);
        while (count($stones) > 0) {
            $weght = 0;
            foreach ($stones as $i => $stone) {
                if ($weght + $stone <= $capacity) {
                    $weght += $stone;
                    unset($stones[$i]);
                }
            }
            $rides += 1;
        }
        return $rides;
    }
}
