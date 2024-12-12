<?php

namespace BrainGames\Games\PrimeNumbers;

use BrainGames\Cli;
use BrainGames\Factors;

use function cli\line;
use function cli\prompt;

function findingPrimeNumber()
{
    Cli\appointsName();
    global $userName;
    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    for ($i  = 0; $i < 3; $i++) {
        $number =  rand(1, 100);
        line("Question: %s", $number);
        $answer = prompt('Your answer');
        $multipliersOfTheNum = Factors\decomposeIntoPrimeFactors($number);
        $lenghtArray = sizeof($multipliersOfTheNum);
        $res =  ($answer === 'yes' && $lenghtArray === 2) || ($answer === 'no' && $lenghtArray  !== 2);
        if ($res === true) {
            line('Correct!');
        } elseif ($lenghtArray  !== 2) {
            line("'$answer' is wrong answer ;(. Correct answer was 'no'.");
            line("Let's try again, $userName!");
            break;
        } elseif ($lenghtArray === 2) {
            line("'$answer' is wrong answer ;(. Correct answer was 'yes'.");
            line("Let's try again, $userName!");
            break;
        }
    }
    if ($res === true) {
        line("Congratulations, $userName!");
    }
}
