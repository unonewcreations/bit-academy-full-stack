<?php

// function to catch input via cli
function input($argc, $argv)
{
// check conditions cli argument. if not exit.
    if ($argc != 2) {
        throw new Exception("Verkeerd aantal argumenten. Roep de applicatie aan op de volgende manier: `wisselgeld.php <bedrag>`");
        exit;
    }
    
    if ($argv[1] < 0) {
        throw new Exception("Input moet een positief getal zijn");
        exit;
    }

    if ($argv[1] === "0") {
        throw new Exception("Geen wisselgeld");
        exit;
    }
    
    if (!is_numeric($argv[1])) {
        throw new Exception("Input moet een valide getal zijn");
        exit;
    } else {
        $change = (float)($argv[1]);
        return $change;
    }
}

// make array
const MONEY_UNITS = [50, 20, 10, 5, 2, 1];
const CENT_UNITS = [50, 20, 10, 5];

// get input
// split input in whole and fraction
// round fraction to nearest 5
function change($change)
{
    $splitted = explode(".", $change);
    global $whole;
    $whole = (int)$splitted[0];
    if (strpos($change, ".")) {
        $num = (int) $splitted[1];
        global $numRound;
        $numRound = round($num / 5) * 5;
    } else {
        $numRound = 0;
    }
}

// function input whole numbers and fraction numbers
// loop array money units and cent units
// check if fraction is zero, if so do not print.
function spare(&$whole, &$numRound)
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

try {
    $geld = input($argc, $argv);
    change($geld);
    spare($whole, $numRound);
} catch (Exception $e) {
    echo 'Error opgevangen: ' . $e->getMessage() . PHP_EOL;
}
