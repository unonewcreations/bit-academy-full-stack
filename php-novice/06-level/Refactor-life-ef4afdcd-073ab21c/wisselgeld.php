<?php

// function to catch input via cli
function input($argc, $argv)
{
// check if cli argument. if not exit.
    if ($argc == 1) {
        echo "Geen wisselgeld";
        exit;
    } else {
        global $change;
        $change = (string)($argv[1]);
        return $change;
    }
}

// make array
const MONEY_UNITS = [50, 20, 10, 5, 2, 1];
const CENT_UNITS = [50, 20, 10, 5];

function change($change)
{
    $splitted = explode(".", $change);
    global $whole;
    $whole = (int)$splitted[0];
    $num = (int) $splitted[1];
    // round number to nearest 5
    global $numRound;
    $numRound = round($num / 5) * 5;
    echo $numRound . PHP_EOL;
}

// function input whole numbers and fraction numbers
// loop array money units and cent units
// check if fraction is zero, if so do not print.
function spare($whole, $numRound)
{
    foreach (MONEY_UNITS as $value) {
        if ($whole >= $value) {
            $timesChange = floor($whole / $value);
            $whole = fmod($whole, $value);
            echo "$timesChange x $value euro" . PHP_EOL;
        }
    }
    foreach (CENT_UNITS as $value) {
        if ($numRound >= $value) {
            $timesChange = floor($numRound / $value);
            $numRound = fmod($numRound, $value);
            echo "$timesChange x $value cent" . PHP_EOL;
        }
    }
}

input($argc, $argv);
change($change);
spare($whole, $numRound);
