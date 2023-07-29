<?php

// array content
$arr = array(
    "Citizen of Glass" => 4.5,
    "Night" => 9,
    "New Eyes" => 5,
    "Strange Trails" => 10
);

// foreach loop array
foreach ($arr as $key => $value) {
    echo "$key kost €$value" . PHP_EOL;
}

// echo total and average
echo "Het totaalbedrag van alle albums is €" . array_sum($arr) . PHP_EOL;
echo "De gemiddelde prijs van alle albums is €" . (array_sum($arr) / count($arr));