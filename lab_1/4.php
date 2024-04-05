<?php

function replaceNegativeWithSquares(&$array) {
    foreach ($array as &$value) {
        if ($value < 0) {
            $value = $value * $value;
        }
    }
}

// Приклад вхідного масиву
$MN = [8, -4, 5, -3, 6, -2, 7, -1];

echo "Початковий масив: ";
print_r($MN);

replaceNegativeWithSquares($MN);

echo "Масив після заміни від'ємних елементів їх квадратами: ";
print_r($MN);

?>