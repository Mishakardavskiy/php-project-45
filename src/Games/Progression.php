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
    for ($i = 0; $i < 3; $i++) {
        $progression = ProgressNum\collectingTheProgression();
        line("Question: %s", $progression);
        $answer = prompt('Your answer');
        //чтобы прошло правильно сравнение меняем тип данных string на int
        $answer = (int)$answer;
        if ($answer === $missingNumber) {
              line("Correct!");
        } elseif ($answer !== $missingNumber) {
            line("'$answer' is wrong answer ;(. Correct answer was '$missingNumber'.\nLet's try again, $userName!");
            break;
        }
    }
    if ($answer === $missingNumber) {
        line("Congratulations, $userName!");
    }
}
