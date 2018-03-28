<?php

namespace Day1\AvitoParser;

class AvitoParser
{
//Решение пока не готово
    /**
     * @param string $string
     * @return array
     */
    public function getLinks(string $string)
    {
        $pattern = '/href\=\"(.*)\"/';
        preg_match_all($pattern, $string, $matches);
        foreach($matches as $link)
            return $link;
    }
}