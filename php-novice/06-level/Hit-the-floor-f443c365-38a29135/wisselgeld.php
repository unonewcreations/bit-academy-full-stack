<?php

// check if cli argument. if not exit.
if ($argc == 1) {
    echo "Geen wisselgeld";
    exit;
}

// get cli argument as input
$change = intval($argv[1]);

// check spare change
function makeChange($change)
{
    $tens = floor($change / 10);
    $change = $change % 10;
    $fives = floor($change / 5);
    $change = $change % 5;
    $twoos = floor($change / 2);
    $change = $change % 2;
    $onees = floor($change / 1);
    $change = $change % 1;
    echo $tens . " x 10 euro" . PHP_EOL;
    echo $fives . " x 5 euro" . PHP_EOL;
    echo $twoos . " x 2 euro" . PHP_EOL;
    echo $onees . " x 1 euro" . PHP_EOL;
}

makeChange($change);
