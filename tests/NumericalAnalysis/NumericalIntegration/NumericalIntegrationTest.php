<?php
namespace MathPHP\Tests\NumericalAnalysis\NumericalIntegration;

use MathPHP\NumericalAnalysis\NumericalIntegration\NumericalIntegration;

class NumericalIntegrationTest extends \PHPUnit_Framework_TestCase
{
    public function testInstantiateAbstractClassException()
    {
        // Instantiating NumericalIntegration (an abstract class)
        $this->expectException('\Error');
        new NumericalIntegration;
    }

    public function testIncorrectInput()
    {
        // The input $source is neither a callback or a set of arrays
        $this->expectException('MathPHP\Exception\BadDataException');
        $x                 = 10;
        $incorrectFunction = $x**2 + 2 * $x + 1;
        NumericalIntegration::getPoints($incorrectFunction, [0,4,5]);
    }

    public function testNotCoordinatesException()
    {
        // An array doesn't have precisely two numbers (coordinates)
        $this->expectException('MathPHP\Exception\BadDataException');
        NumericalIntegration::validate([[0,0], [1,2,3], [2,2]]);
    }

    public function testNotEnoughArraysException()
    {
        // There are not enough arrays in the input
        $this->expectException('MathPHP\Exception\BadDataException');
        NumericalIntegration::validate([[0,0]]);
    }

    public function testNotAFunctionException()
    {
        // Two arrays share the same first number (x-component)
        $this->expectException('MathPHP\Exception\BadDataException');
        NumericalIntegration::validate([[0,0], [0,5], [1,1]]);
    }
}
