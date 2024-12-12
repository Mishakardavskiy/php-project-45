<?php

namespace BrainGames\Games\Progression;

use BrainGames\Cli;
use BrainGames\ProgressNum;

use function cli\line;
use function cli\prompt;

function searchForProgression()
{
    Cli\appointsName();
    global $userName;
    global $missingNumber;
    line("What number is missing in the progression?");
    for ($i  = 0; $i < 3; $i++) {
        $progression = ProgressNum\collectingTheProgression();
        $listNum = implode(' ', $progression);
         line("Question: %s", $listNum);
        $answer = prompt('Your answer');
        if ((int)$answer === $missingNumber) {
              line("Correct!");
        } elseif ((int)$answer !== $missingNumber) {
            line("'$answer' is wrong answer ;(. Correct answer was '$missingNumber'. Let's try again, $userName!");
            break;
        }
    }
    if ((int)$answer === $missingNumber) {
        line("Congratulations, $userName!");
    }
}
