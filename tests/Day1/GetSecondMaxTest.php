<?php
use Day1\GetSecondMax\GetSecondMax;
use PHPUnit\Framework\TestCase;

class GetSecondMaxTest extends TestCase
{
    /** @var GetSecondMax */
    private $yardstick;

    public function setUp()
    {
        $this->yardstick = new GetSecondMax();
    }

    public function test_max_1()
    {
        $this->assertEquals(111, $this->yardstick->getSecond([1, 8, 5, 9, 0, 6, 6, 5, 8, 12, 8, 99, 111, 8787]));
    }

    public function test_max_2()
    {
        $this->assertEquals(0, $this->yardstick->getSecond([-1, 12, 0, -76]));
    }
}