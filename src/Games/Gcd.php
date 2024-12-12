<?php

namespace BrainGames\Games\Gcd;

use BrainGames\Cli;
use BrainGames\Factors;

use function cli\line;
use function cli\prompt;

function greatestCommonDivisor()
{
    Cli\appointsName();
    global $userName;
    line("Find the greatest common divisor of given numbers.");
    for ($i  = 0; $i < 3; $i++) {
        $numOne = rand(1, 10);
        $numTwo =  rand(1, 10);
        line("Question: %s %s", $numOne, $numTwo);
        $answer = prompt('Your answer');
        $multipliersOfTheFirstNum = Factors\decomposeIntoPrimeFactors($numOne);
        $multipliersOfTheSecondNum = Factors\decomposeIntoPrimeFactors($numTwo);
        $maxDivisor = max(array_intersect($multipliersOfTheFirstNum, $multipliersOfTheSecondNum));
        if ((int)$answer === $maxDivisor) {
            line("Correct!");
        } elseif ((int)$answer !== $maxDivisor) {
            line("'$answer' is wrong answer ;(. Correct answer was '$maxDivisor'.Let's try again, $userName!");
            break;
        }
    }
    if ((int)$answer === $maxDivisor) {
        line("Congratulations, $userName!");
    }
}
