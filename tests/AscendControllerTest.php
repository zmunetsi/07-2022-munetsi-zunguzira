<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

// test the controller
final class AscendControllerTest extends TestCase
{
    // test sort string
    public function testSortString()
    {
        $controller = new AscendController();
        $this->assertEquals('abc', $controller->sortString('abc'));
    }
}