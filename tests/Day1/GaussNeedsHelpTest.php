<?php
use Day1\GaussNeedsHelp\GaussNeedsHelp;
use PHPUnit\Framework\TestCase;

class GaussNeedsHelpTest extends TestCase
{
    /** @var GaussNeedsHelp */
    private $sum;

    public function setUp()
    {
        $this->sum = new GaussNeedsHelp();
    }

    public function test_sum_1()
    {
        $this->assertEquals(5050, $this->sum->get(100));
    }

    public function test_sum_2()
    {
        $this->assertEquals(0, $this->sum->get(0));
    }

    public function test_sum_3()
    {
        $this->assertEquals(-6, $this->sum->get(-3));
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function test_for_float()
    {
        $this->sum->get(0.5);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function test_for_string()
    {
        $this->sum->get("fgfg");
    }
}