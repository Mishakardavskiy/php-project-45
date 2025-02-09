<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function appointsName(&$userName)
{
    line('Welcome to the Brain Games!');
    $userName = prompt('May I have your name?');
    line("Hello, %s!", $userName);
}

function askQuestion(...$questions)
{
    $lenght = count($questions);
    if ($lenght === 1) {
        line("Question: %s", $questions[0]);
    } elseif ($lenght === 2) {
        line("Question: %s %s", $questions[0], $questions[1]);
    } elseif ($lenght === 3) {
        line("Question: %s %s %s", $questions[0], $questions[1], $questions[2]);
    }
}

function getAnswer(string &$answer)
{
    $answer = prompt('Your answer');
    return $answer;
}

function gotWinner(int|string $answer, int $rightAnswer, string $userName)
{
    if ($answer === $rightAnswer) {
        line("Congratulations, $userName!");
    }
}

//Функция используется в 2 файлах
function countingDivisors(int $number)
{
    $numbers = [];
    for ($i = 1; $i <= $number; $i++) {
        if ($number % $i == 0) {
            $numbers[] = $i;
        }
    }
    return $numbers;
}
//печатаем сообщение об ошибке для Progression, Calc, Gcd
function printsAnError(int|string $answer, int $rightAnswer, string $userName)
{
    line("'$answer' is wrong answer ;(. Correct answer was '$rightAnswer'.\nLet's try again, $userName!");
}

function collectingTheProgression()
{
    global $missingNumber;
    $startNumber = rand(0, 10);
    $numbers = [];
    $lenghtProgress = rand(1, 5);
    for ($i = $startNumber; $i <= 100; $i++) {
        $numbers[] = $i * $lenghtProgress;
    }
    $tenNumbers = array_slice($numbers, 0, 10);
    $randomArrayIndex = rand(0, 9);
    $missingNumber = $tenNumbers[$randomArrayIndex];
    $result = array_replace($tenNumbers, [$randomArrayIndex => '..']);
    $listNum = implode(' ', $result);
    return $listNum;
}
