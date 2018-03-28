<?php
use Day1\ReversedStrings\ReversedStrings;
use PHPUnit\Framework\TestCase;

class ReversedStringsTest extends TestCase
{
    /** @var ReversedStrings */
    private $reverse;

    public function setUp()
    {
        $this->reverse = new ReversedStrings();
    }

    public function test_reverse_string_1()
    {
        $this->assertEquals("!dlrow ,olleH", $this->reverse->solution("Hello, world!"));
    }

    public function test_reverse_string_2()
    {
        $this->assertEquals("8102", $this->reverse->solution("2018"));
    }
}
