<?php

namespace Day1\NameShortener;

class NameShortener
{
    /**
     * @param string $fullName
     * @return string
     */
    public function cut(string $fullName)
    {
        list($surname, $firstName, $patronymic) = explode(" ", $fullName);
        $result = $surname;
        $shortName = mb_substr($firstName, 0, 1);
        if ($shortName) {
            $result .= ' ' . $shortName . '.';
        }
        if ($patronymic) {
            $shortPatronymic = mb_substr($patronymic, 0, 1);
            $result .= ' ' . $shortPatronymic . '.';
        };
        return $result;
    }
}