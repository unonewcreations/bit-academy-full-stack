<?php

// count given cli
$argc = count($argv);

// shift cli so that the file index is removed
array_shift($argv);

// make new array 
$arr = $argv;

// check for cli
if ($argc < 2) {
    echo "Geen input gevonden" . PHP_EOL;
    exit;
}

// loop the input cli
$total = 0;
for ($i = 0; $i < count($arr); $i++) {
    $unit = substr($arr[$i], -1);
    $num = (int) $arr[$i];
    if ($num == null) {
        echo "Geen tijd opgegeven" . PHP_EOL;
        exit;
    }
    // calculate seconds and add to $total
    switch ($unit) {
        case "s":
            $total += $num;
            break;
        case "m":
            $seconds = $num *= 60;
            $total += $seconds;
            break;
        case "u":
            $seconds = $num *= 3600;
            $total += $seconds;
            break;
        case "d":
            $seconds = $num *= 86400;
            $total += $seconds;
            break;
        default:
            break;
    }
}

// output total seconds
echo "De totale tijd is $total seconden" . PHP_EOL;
