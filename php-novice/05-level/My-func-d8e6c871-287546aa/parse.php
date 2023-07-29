<?php

function parseToInteger($value)
{
    if (is_numeric($value)) {
        $int_value = intval($value);
        echo $int_value;
    } else {
        echo "Input moet een valide getal zijn";
    }
}

// Pas de code hieronder niet aan!

echo parseToInteger(10) . PHP_EOL;
echo parseToInteger("101") . PHP_EOL;
echo parseToInteger("Hallo wereld!") . PHP_EOL;
