<?php

namespace BrainGames\Games\PrimeNumbers;

use BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function findingPrimeNumber()
{
    $userName = '';
    Engine\appointsName($userName);
    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    for ($i  = 0; $i < 3; $i++) {
        $number =  rand(1, 100);
        Engine\askQuestion($number);
        $answer = '';
/*У простого числа всего 2 делителя,
находим их, и если размер массива = 2,
то число простое*/
        Engine\getAnswer($answer);
        $numDivisors = sizeof(Engine\countingDivisors($number));
        if (($answer == 'yes' && $numDivisors == 2) || ($answer == 'no' && $numDivisors  !== 2)) {
            line('Correct!');
        } elseif ($numDivisors !== 2) {
            line("'$answer' is wrong answer ;(. Correct answer was 'no'.");
            line("Let's try again, $userName!");
            break;
        } elseif ($numDivisors === 2) {
            line("'$answer' is wrong answer ;(. Correct answer was 'yes'.");
            line("Let's try again, $userName!");
            break;
        }
    }
    if (($answer == 'yes' && $numDivisors == 2) || ($answer == 'no' && $numDivisors  !== 2)) {
        line("Congratulations, $userName!");
    }
}
