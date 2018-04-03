<?php
use Day2\HealthyCar\HealthyCar;
use PHPUnit\Framework\TestCase;

class HealthyCarTest extends TestCase
{
    /** @var HealthyCar */
    private $truck;

    public function setUp()
    {
        $this->truck = new HealthyCar();
    }

    public function test_1_ride()
    {
        $this->assertEquals(
            1,
            $this->truck->moveStones([20000, 5000])
        );
    }

    public function test_2_rides()
    {
        $this->assertEquals(
            2,
            $this->truck->moveStones([20000, 20000])
        );
    }
}