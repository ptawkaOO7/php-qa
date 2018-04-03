<?php
use Day2\FindTheLongest\FindTheLongest;
use PHPUnit\Framework\TestCase;

class FindTheLongestTest extends TestCase
{
    /** @var FindTheLongest */
    private $string;

    public function setUp()
    {
        $this->string = new FindTheLongest();
    }

    public function test_1()
    {
        $this->assertEquals(
            ["Марина"],
            $this->string->findLongest("меня зовут Марина")
        );
    }

    public function test_2()
    {
        $this->assertEquals(
            ["stop", "test"],
            $this->string->findLongest("stop to test it")
        );
    }

    public function test_same_len()
    {
        $this->assertEquals(
            ["мама", "мыла", "раму"],
            $this->string->findLongest("мама мыла раму")
        );
    }

    public function test_punctuation()
    {
        $this->assertEquals(
            ["диване"],
            $this->string->findLongest("кто на диване лежит?")
        );
    }

    public function test_special_simbol()
    {
        $this->assertEquals(
            ["пишет"],
            $this->string->findLongest("кот пишет
            код")
        );
    }
}