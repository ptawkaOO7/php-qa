<?php

namespace Day2\BanThisItems;

class BanThisItems
{
    /**
     * @param array $elements
     * @return array
     */
    public function findDuplicate(array $elements)
    {
        $result = [];
        $newArr = array_count_values($elements);
        foreach ($newArr as $element => $count){
            if($count > 1){
                $result[] = $element;
            }
        }
        return $result;
    }
}