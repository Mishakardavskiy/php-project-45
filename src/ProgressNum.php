<?php

namespace BrainGames\ProgressNum;

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
