<?php

// Відкриваємо вхідний файл для читання
$inputFile = fopen("input.txt", "r");

// Зчитуємо вміст вхідного файлу
$inputContent = fread($inputFile, filesize("input.txt"));

// Закриваємо вхідний файл
fclose($inputFile);

// Видаляємо символи між дужками та самі дужки
$outputContent = preg_replace("/\([^)]+\)/", "", $inputContent);

// Відкриваємо вихідний файл для запису
$outputFile = fopen("output.txt", "w");

// Записуємо вміст без дужок у вихідний файл
fwrite($outputFile, $outputContent);

// Закриваємо вихідний файл
fclose($outputFile);

echo "Вміст файлу успішно змінено і записано у файл output.txt\n";

?>