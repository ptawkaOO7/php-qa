<?php
use Day1\NameShortener\NameShortener;
use PHPUnit\Framework\TestCase;

class NameShortenerTest extends TestCase
{
    /** @var NameShortener */
    private $name;

    public function setUp()
    {
        $this->name = new NameShortener();
    }

    public function test_short_1()
    {
        $this->assertEquals("Иванов И. И.", $this->name->cut("Иванов Иван Иванович"));
    }

    public function test_short_2()
    {
        $this->assertEquals("Mark T.", $this->name->cut("Mark Twain"));
    }

    public function test_short_3()
    {
        $this->assertEquals("Иванов", $this->name->cut("Иванов"));
    }
}
