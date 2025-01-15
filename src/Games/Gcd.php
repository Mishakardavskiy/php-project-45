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
        //чтобы прошло правильно сравнение меняем тип данных string на int
        $answer = (int)$answer;
        $multipliersOfTheFirstNum = Factors\decomposeIntoPrimeFactors($numOne);
        $multipliersOfTheSecondNum = Factors\decomposeIntoPrimeFactors($numTwo);
        $maxDivisor = 0;
        $maxDivisor = max(array_intersect($multipliersOfTheFirstNum, $multipliersOfTheSecondNum));
        if ($answer === $maxDivisor) {
            line("Correct!");
        } elseif ($answer !== $maxDivisor) {
            line("'$answer' is wrong answer ;(. Correct answer was '$maxDivisor'.\nLet's try again, $userName!");
            break;
        }
    }
    if ($answer === $maxDivisor) {
        line("Congratulations, $userName!");
    }
}
