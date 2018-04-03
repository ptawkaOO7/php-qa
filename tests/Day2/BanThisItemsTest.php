<?php
use Day2\BanThisItems\BanThisItems;
use PHPUnit\Framework\TestCase;

class BanThisItemsTest extends TestCase
{
    /** @var BanThisItems */
    private $array;

    public function setUp()
    {
        $this->array = new BanThisItems();
    }

    public function test_1()
    {
        $this->assertEquals(
            ["число"],
            $this->array->findDuplicate(["число", "необработанных", "кейсов", "число"])
        );
    }

    public function test_zero()
    {
        $this->assertEquals(
            [],
            $this->array->findDuplicate(["кот", "пишет", "код"])
        );
    }

    public function test_lat()
    {
        $this->assertEquals(
            ["test", 3],
            $this->array->findDuplicate(["test", 3, 3, "test"])
        );
    }
}