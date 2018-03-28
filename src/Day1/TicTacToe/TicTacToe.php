<?php

namespace Day1\TicTacToe;

class TicTacToe
{
    /**
     * @param array $array
     * @return string
     */
    public function check($array) //незавершенный вариант
    {
        if (in_array(['x','x','x'], $array)) {
            return 'x';
        }
        if (in_array(['o','o','o'], $array)) {
            return 'o';
        }
        if ($array[0][0] = $array[1][0] = $array[2][0]){
            return ($array[2][0]);
        }
        if ($array[0][1] = $array[1][1] = $array[2][1]){
            return ($array[2][1]);
        }
        if ($array[0][2] = $array[1][2] = $array[2][2]) {
            return ($array[2][2]);
        }
        if ($array[0][0] = $array[1][1] = $array[2][2]){
            return ($array[2][2]);
        }
        if ($array[0][2] = $array[1][1] = $array[2][0]){
            return ($array[2][0]);
        } else
            return false;
    }
}