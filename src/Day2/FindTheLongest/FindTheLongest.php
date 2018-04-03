<?php

namespace Day2\FindTheLongest;

class FindTheLongest
{
    /**
     * @param string $str
     * @return array
     */
    public function findLongest(string $str)
    {
        $result = [];
        $maxWordLen = 0;
        $arr = explode(" ", $str);
        foreach ($arr as $word){
            $realWord = trim($word, ".!?;-\t\n\r\0\x0B");
            $strLen = mb_strlen($realWord);
            if($strLen >= $maxWordLen){
                if($strLen > $maxWordLen) {
                    $result = [];
                    $maxWordLen = $strLen;
                }
                $result[] = $realWord;
            }
        }
        return $result;
    }
}