<?php

function calculateSpeed($distance, $time) {
    // Обчислення швидкості в км/год
    $speed_kmh = $distance / $time;

    // Обчислення швидкості в м/с
    $speed_ms = $distance * 1000 / ($time * 3600);

    // Підготовка рядка з результатами для виведення
    $result = "Швидкість руху: \n";
    $result .= "У км/год: " . number_format($speed_kmh, 2) . " км/год\n";
    $result .= "У м/с: " . number_format($speed_ms, 2) . " м/с\n";

    return $result;
}

// Введення даних користувачем
$distance = readline("Введіть пройдений шлях (в кілометрах): ");
$time = readline("Введіть час руху (у годинах): ");

// Виклик функції та виведення результату
echo calculateSpeed($distance, $time);

?>