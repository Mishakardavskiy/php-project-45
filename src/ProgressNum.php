<?php

namespace BrainGames\ProgressNum;

function collectingTheProgression()
{
    global $missingNumber;
    $startNumber = rand(1, 10);
    $numbers = [];
    $lenghtProgress = rand(1, 5);
    for ($i = $startNumber; $i <= 20; $i++) {
        $numbers[] = $i * $lenghtProgress;
    }
    $tenNumbers = array_slice($numbers, 0, 10);
    $missingNumber = $tenNumbers[rand(0, 9)];
    $result = str_replace($missingNumber, "..", $tenNumbers);
    return $result;
}
