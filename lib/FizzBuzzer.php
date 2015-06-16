<?php

namespace FizzBuzz;

class FizzBuzzer
{
    const FIZZ = 3;
    const BUZZ = 5;

    /**
     * @param $val
     * @return string
     */
    public static function fizzBuzz($val)
    {
        if ($val % (static::FIZZ * static::BUZZ) === 0) {
            $string = 'Fizz Buzz';
        } elseif ($val % static::FIZZ === 0) {
            $string = 'Fizz';
        } elseif ($val % static::BUZZ === 0) {
            $string = 'Buzz';
        } else {
            $string = $val;
        }

        return $string;
    }
}
