<?php

namespace BrainGames\Cli;

use function cli\linie;
use function cli\prompt;

function appointsName()
{
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
}
