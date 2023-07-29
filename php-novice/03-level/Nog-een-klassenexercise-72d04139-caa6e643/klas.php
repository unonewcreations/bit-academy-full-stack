<?php

echo 'Wie zit er in de klas?' . PHP_EOL;
$arr = explode(' ', readline());

echo 'De studenten in de klas zijn:' . PHP_EOL;
foreach ($arr as $name) {
    echo $name . PHP_EOL;
}




