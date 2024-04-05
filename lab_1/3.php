<?php

function replacePositiveWithZero(&$array) {
    foreach ($array as &$value) {
        if ($value > 0) {
            $value = 0;
        }
    }
}

// Приклад вхідного масиву
$array = [1, -2, 3, -4, 5, 6, -7];

echo "Початковий масив: ";
print_r($array);

replacePositiveWithZero($array);

echo "Масив після заміни додатніх чисел на нулі: ";
print_r($array);

?>