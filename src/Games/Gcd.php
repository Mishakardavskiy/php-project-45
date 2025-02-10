<?php

namespace BrainGames\Games\Gcd;

use BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function greatestCommonDivisor()
{
    $userName = '';
    Engine\appointsName($userName);
    line("Find the greatest common divisor of given numbers.");
    for ($i  = 0; $i < 3; $i++) {
        $numOne = rand(1, 10);
        $numTwo =  rand(1, 10);
        Engine\askQuestion($numOne, $numTwo);
        $answer = '';
        Engine\getAnswer($answer);
        //чтобы прошло правильно сравнение меняем тип данных string на int
        $answer = (int)$answer;
        $divisorFirstNum = Engine\countingDivisors($numOne);
        $divisorSecondNum = Engine\countingDivisors($numTwo);
        $maxDivisor = max(array_intersect($divisorFirstNum, $divisorSecondNum));
        if ($answer === $maxDivisor && $i === 2) {
            line("Correct!\nCongratulations, $userName!");
        } elseif ($answer === $maxDivisor) {
            line("Correct!");
        } elseif ($answer !== $maxDivisor) {
            Engine\printsAnError($answer, $maxDivisor, $userName);
            break;
        }
    }
}
