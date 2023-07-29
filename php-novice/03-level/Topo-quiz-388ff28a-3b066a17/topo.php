<?php

$arr = array(
    "Japan" => "Tokyo",
    "Mexico" => "Mexico-Stad",
    "USA" => "Washington D.C.",
    "India" => "New Delhi",
    "Zuid-Korea" => "Seoul",
    "China" => "Peking",
    "Nigeria" => "Abuja",
    "Argentinië" => "Buenos Aires",
    "Egypte" => "Cairo",
    "Engeland" => "London"
);

$totaalVragen = count($arr);
$score = 0;

foreach ($arr as $key => $value) {
    echo "Welke hoofdstad heeft $key" . PHP_EOL;
    $capitol = readline();
    if ($capitol === $value) {
        echo "Correct!" . PHP_EOL;
        $score++;
    } else {
        echo "Helaas, $capitol is niet de hoofdstad van $key" . PHP_EOL;
        echo "Het correcte antwoord is $value" . PHP_EOL;
    }
}

echo "Je hebt $score van de $totaalVragen goed geraden!";