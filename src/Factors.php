<?php

namespace BrainGames\Factors;

function decomposeIntoPrimeFactors($number)
{
    $numbers = [];
    for ($i = 1; $i <= $number; $i++) {
        if ($number % $i == 0) {
            $numbers[] = $i;
        }
    }
    return $numbers;
}
