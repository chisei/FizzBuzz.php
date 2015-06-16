<?php

use FizzBuzz\FizzBuzzer;

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @dataProvider correctFizzBuzzDataProvider
     */
    public function correctFizzBuzz($input, $expected)
    {
        $actual = FizzBuzzer::fizzBuzz($input);

        $this->assertSame($expected, $actual);
    }

    public function correctFizzBuzzDataProvider()
    {
        return [
            [1, 1],
            [2, 2],
            [3, 'Fizz'],
            [4, 4],
            [5, 'Buzz'],
            [15, 'Fizz Buzz'],
            [16, 16],
            [PHP_INT_MAX, PHP_INT_MAX],
        ];
    }

    /**
     * @test
     * @dataProvider intIsNotAllowedDataProvider
     * @expectedException InvalidArgumentException
     */
    public function intIsNotAllowed($input)
    {
        $actual = FizzBuzzer::fizzBuzz($input);
    }

    public function intIsNotAllowedDataProvider()
    {
        return [
            [true],
            [false],
            [null],
            ['0'],
            ['a'],
            [0.1],
        ];
    }

    /**
     * @test
     * @dataProvider shouldBeGreaterThanZeroDataProvider
     * @expectedException InvalidArgumentException
     */
    public function shouldBeGreaterThanZero($input)
    {
        $actual = FizzBuzzer::fizzBuzz($input);
    }

    public function shouldBeGreaterThanZeroDataProvider()
    {
        return [
            [-1],
            [0],
        ];
    }
}
