<?php

namespace BrainGames\Games\Calc;

use BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function countingTheNumbers()
{
    $userName = '';
    Engine\appointsName($userName);
    line("What is the result of the expression?");
    for ($i  = 0; $i < 3; $i++) {
        $numOne = rand(0, 10);
        $numTwo = rand(0, 10);
        $operators = ['+', '-', '*'];
        $operator = $operators[rand(0, 2)];
        Engine\askQuestion($numOne, $operator, $numTwo);
        switch ($operator) {
            case '+':
                $result = $numOne + $numTwo;
                break;
            case '-':
                $result = $numOne - $numTwo;
                break;
            case '*':
                $result = $numOne * $numTwo;
                break;
        }
        $answer = '';
        Engine\getAnswer($answer);
        $answer = (int)$answer;
        if ($answer === $result && $i === 2) {
            line("Correct!\nCongratulations, $userName!");
        } elseif ($answer === $result) {
            line("Correct!");
        } elseif ($answer !== $result) {
            Engine\printsAnError($answer, $result, $userName);
            break;
        }
    }
}
