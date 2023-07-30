<?php

// check if cli argument. if not exit.
if ($argc == 1) {
    echo "Geen wisselgeld";
    exit;
}

// make array
const MONEY_UNITS = [50, 20, 10, 5, 2, 1];
const CENT_UNITS = [50, 20, 10, 5];

// get cli argument as input
$change = (string)($argv[1]);
$splitted = explode(".", $change);
$whole = (int)$splitted[0];
$num = (int) $splitted[1];

// loop array
foreach (MONEY_UNITS as $value) {
    if ($whole >= $value) {
        $timesChange = floor($whole / $value);
        $whole = fmod($whole, $value);
        echo "$timesChange x $value euro" . PHP_EOL;
    }
}

foreach (CENT_UNITS as $value) {
    if ($num >= $value) {
        $timesChange = floor($num / $value);
        $num = fmod($num, $value);
        echo "$timesChange x $value cent" . PHP_EOL;
    }
}
