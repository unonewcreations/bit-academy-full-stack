<?php

// check if cli argument. if not exit.
if ($argc == 1) {
    echo "Geen wisselgeld";
    exit;
}

// make array
const MONEY_UNITS = [50, 20, 10, 5, 2, 1];

// get cli argument as input
$change = intval($argv[1]);

// loop array
foreach (MONEY_UNITS as $value) {
    if ($change >= $value) {
        $timesChange = floor($change / $value);
        $change = $change % $value;
        echo "$timesChange x $value euro" . PHP_EOL;
    }
}
