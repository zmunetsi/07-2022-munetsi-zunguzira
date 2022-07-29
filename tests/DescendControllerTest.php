<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

// test the controller
final class DescendControllerTest extends TestCase
{
    // Tests will go here
    // test sortString()
    public function testSortString()
    {
        $controller = new DescendController();
        $this->assertEquals('cba', $controller->sortString('abc'));
    }
}