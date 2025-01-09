<?php

namespace BrainGames\Games\ParityCheck;

use BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function checkingTheParity()
{
    Cli\appointsName();
    global $userName;
    line('Answer "yes" if the number is even, otherwise answer "no".');
    for ($i  = 0; $i < 3; $i++) {
        $randNum = rand();
        line("Question: %s", $randNum);
        $answer = prompt('Your answer');
        //проверка на правильность ответа
        $res =  ($answer === 'yes' && $randNum % 2 === 0) || ($answer === 'no' && $randNum % 2 !== 0);
        if ($res === true) {
            line('Correct!');
        } elseif ($randNum % 2 !== 0) {
            line("'$answer' is wrong answer ;(. Correct answer was 'no'.");
            line("Let's try again, $userName!");
            break;
        } elseif ($randNum % 2 === 0) {
            line("'$answer' is wrong answer ;(. Correct answer was 'yes'.");
            line("Let's try again, $userName!");
            break;
        }
    }
    if ($res === true) {
        line("Congratulations, $userName!");
    }
}
