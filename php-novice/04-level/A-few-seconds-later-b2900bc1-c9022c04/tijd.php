<?php

// input
$num = (int) $argv[1];
$unit = substr($argv[1], -1);
var_dump($argv[1]);
echo $num . PHP_EOL;
echo $unit . PHP_EOL;

if ($unit == "d") {
    $seconds = $num *= 86400;
    echo "$seconds seconden";
} else if ($unit == "u") {
    $seconds = $num *= 3600;
    echo "$seconds seconden";
} else if ($unit == "m") {
    $seconds = $num *= 60;
    echo "$seconds seconden";
} else {
    echo "$num seconden";
}

