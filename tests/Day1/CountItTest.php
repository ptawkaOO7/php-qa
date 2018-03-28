<?php
use Day1\CountIt\CountIt;
use PHPUnit\Framework\TestCase;

class CountItTest extends TestCase
{
    /** @var CountIt */
    private $counter;

    public function setUp()
    {
        $this->counter = new CountIt();
    }

    public function test_count_int_1()
    {
        $this->assertEquals(3, $this->counter->count(8976895784672944, 8));
    }

    public function test_count_int_2()
    {
        $this->assertEquals(0, $this->counter->count(65436547765465, 0));
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function test_for_non_numerial()
    {
        $this->counter->count(1111, -1);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function test_for_non_numerial_1()
    {
        $this->counter->count(1111, 10);
    }
}
