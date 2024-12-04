<?php

namespace BrainGames\Games\Calc;

use BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function countingTheNumbers()
{
    Cli\appointsName();
    global $userName;
    line("What is the result of the expression?");
    for ($i  = 0; $i < 3; $i++) {
        $numOne = rand(0, 10);
        $numTwo = rand(0, 10);
        $operators = array('+', '-', '*');
        $operator = $operators[rand(0, 2)];
        line("Question: %s %s %s", $numOne, $operator, $numTwo);
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
        $answer = prompt('Your answer');
        if ($answer === (string)$result) {
            line("Correct!");
        } elseif ($answer !== (string)$result) {
            line("'$answer' is wrong answer ;(. Correct answer was '$result'.");
            line("Let's try again, $userName.");
            break;
        }
    }
    if ($answer === (string)$result) {
        line("Congratulations, $userName!");
    }
}
