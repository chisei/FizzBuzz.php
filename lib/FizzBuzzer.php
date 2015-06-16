<?php

namespace FizzBuzz;

class FizzBuzzer
{
    const FIZZ = 3;
    const BUZZ = 5;

    /**
     * @param  integer $val
     * @return string
     */
    public static function fizzBuzz($val)
    {
        if (!is_int($val)) {
            throw new \InvalidArgumentException('This value should be an integer.');
        }

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
