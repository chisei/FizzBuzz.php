<?php

use FizzBuzz\FizzBuzzer;

require_once __DIR__.'/vendor/autoload.php';

for ($i=1; $i<=100; $i++) {
    echo FizzBuzzer::fizzBuzz($i)." ";
}
