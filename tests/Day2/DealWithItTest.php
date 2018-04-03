<?php
use Day2\DealWithIt\DealWithIt;
use PHPUnit\Framework\TestCase;

class DealWithItTest extends TestCase
{
    /** @var DealWithIt */
    private $email;

    public function setUp()
    {
        $this->email = new DealWithIt();
    }

    public function test_1_match()
    {
        $this->assertEquals(
            "Мой логин @test и моя почта ***************",
            $this->email->emailReplaser("Мой логин @test и моя почта example@test.ru")
        );
    }

    public function test_2_match()
    {
        $this->assertEquals(
            "У меня несколько адресов: ************************ и *****************.",
            $this->email->emailReplaser(
                "У меня несколько адресов: example7676@test-test.ru и ex.ample@test.com.")
        );
    }
}