<?php
use Day1\TicTacToe\TicTacToe;
use PHPUnit\Framework\TestCase;

class TicTacToeTest extends TestCase
{
    /** @var TicTacToe */
    private $counter;

    public function setUp()
    {
        $this->counter = new TicTacToe();
    }

    public function test_tic_tac_1()
    {
        $this->assertEquals(false, $this->counter->check([
            ['o','x','x'],
            ['x','o','o'],
            ['x','o',null],
        ]));
    }

    public function test_tic_tac_2()
    {
        $this->assertEquals('o', $this->counter->check([
            ['o','x','x'],
            ['o','o','o'],
            ['x','o',null],
        ]));
    }

    public function test_tic_tac_3()
    {
        $this->assertEquals('x', $this->counter->check([
            ['x','x','o'],
            ['x','o','o'],
            ['x','o',null],
        ]));
    }

    public function test_tic_tac_4()
    {
        $this->assertEquals('o', $this->counter->check([
            ['o','x','o'],
            ['x','o','x'],
            ['x','o','o'],
        ]));
    }
}
