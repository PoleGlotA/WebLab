<?php

function getCardValue($number) {
    switch ($number) {
        case 11:
            return "валет";
        case 12:
            return "дама";
        case 13:
            return "король";
        case 14:
            return "туз";
        default:
            return "Карта номер $number";
    }
}

// Зчитуємо введений користувачем номер карти
$cardNumber = readline("Введіть номер карти: ");

// Виводимо величину карти
echo "Величина карти: " . getCardValue($cardNumber) . "\n";

?>