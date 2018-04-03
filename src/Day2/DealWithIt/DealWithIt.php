<?php

namespace Day2\DealWithIt;

class DealWithIt
{
    /**
     * Решение с помощью регулярок
     * @param string $str
     * @return string
     */
    public function emailReplaser(string $str)
    {
        $matches = [];
        preg_match_all("([-\\w\\.]+@\\w+[-\\w]+\\.[A-z]+)", $str, $matches, PREG_SET_ORDER);
        foreach ($matches as $match){
            $hide = str_repeat("*", strlen($match[0]));
            $str = str_replace($match[0], $hide, $str);
        }
        return $str;
    }
}
