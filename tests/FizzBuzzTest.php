<?php

use FizzBuzz\FizzBuzzer;

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @dataProvider correctlyFizzBuzzDataProvider
     */
    public function fizzBuzz($input, $expected)
    {
        $actual = FizzBuzzer::fizzBuzz($input);

        $this->assertSame($expected, $actual);
    }

    public function correctlyFizzBuzzDataProvider()
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
            [PHP_INT_MAX+1, PHP_INT_MAX+1],
        ];
    }
}
