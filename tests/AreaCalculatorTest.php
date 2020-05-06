<?php

use App\AreaCalculator;
use App\Rectangle;

class AreaCalculatorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var AreaCalculator
     */
    protected $object;

    protected function setUp()
    {
        $this->object = new AreaCalculator;
    }

    /**
     * @test
     */
    public function testGetArea()
    {
        $rectangles = [];

        // 結果は4
        $rectangles[] = new Rectangle(2,2);
        // 結果は16
        $rectangles[] = new Rectangle(8,2);

        $expect = 20;

        $this->assertEquals($expect,$this->object->getArea($rectangles));
    }
}
