<?php

namespace BrainGames\Games\Even;

use BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function checkingTheParity()
{
    $userName = '';
    Engine\appointsName($userName);
    line('Answer "yes" if the number is even, otherwise answer "no".');
    for ($i  = 0; $i < 3; $i++) {
        $randNum = rand(1, 100);
        Engine\askQuestion($randNum);
        $answer = '';
        $answer = Engine\getAnswer($answer);
        if (($answer == 'yes' && $randNum % 2 == 0) || ($answer == 'no' && $randNum % 2 !== 0)) {
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
    if (($answer === 'yes' && $randNum % 2 == 0) || ($answer == 'no' && $randNum % 2 !== 0)) {
        line("Congratulations, $userName!");
    }
}
