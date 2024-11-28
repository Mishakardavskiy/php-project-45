<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function appointsName()
{
    global $userName;
    line('Welcome to the Brain Game!');
    $userName = prompt('May I have your name?');
    line("Hello, %s!", $userName);
}
