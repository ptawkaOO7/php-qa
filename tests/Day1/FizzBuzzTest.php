<?php
use Day1\FizzBuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /** @var FizzBuzz */
    private $fb;

    public function setUp()
    {
        $this->fb = new FizzBuzz();
    }

    public function test_fb_1()
    {
        $this->assertEquals('fizzbuzz', $this->fb->get(75));
    }

    public function test_fb_2()
    {
        $this->assertEquals(1, $this->fb->get(1));
    }

    public function test_fb_3()
    {
        $this->assertEquals('buzz', $this->fb->get(55));
    }

    public function test_fb_4()
    {
        $this->assertEquals('fizz', $this->fb->get(99));
    }

    public function test_fb_5()
    {
        $this->assertEquals('fizz', $this->fb->get(-99));
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function test_for_null()
    {
        $this->fb->get(0);
    }
}
