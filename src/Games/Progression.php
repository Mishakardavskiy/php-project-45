<?php

namespace BrainGames\Games\Progression;

use BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function searchForProgression()
{
    $userName = '';
    Engine\appointsName($userName);
    global $missingNumber;
    line("What number is missing in the progression?");
    for ($i = 0; $i < 3; $i++) {
        $progression = Engine\collectingTheProgression();
        Engine\askQuestion($progression);
        $answer = '';
        $answer = Engine\getAnswer($answer);
        //чтобы прошло правильно сравнение меняем тип данных string на int
        $answer = (int)$answer;
        if ($answer === $missingNumber) {
            line("Correct!");
        } elseif ($answer !== $missingNumber) {
            Engine\printsAnError($answer, $missingNumber, $userName);
            break;
        }
    }
        Engine\gotWinner($answer, $missingNumber, $userName);
}
