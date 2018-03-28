<?php
use Day1\AvitoParser\AvitoParser;
use PHPUnit\Framework\TestCase;

class AvitoParserTest extends TestCase
{
    /** @var AvitoParser */
    private $p;

    public function setUp()
    {
        $this->p = new AvitoParser();
    }

    public function test_fb_1()
    {
        $this->assertEquals(
            ['https://www.avito.ru'],
            $this->p->getLinks("тут содержится ссылка href='https://example.com'")
        );
    }
}
