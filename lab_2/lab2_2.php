<?php

// Читаємо вміст файлу X1
$fileContent = file_get_contents('X1.txt');

// Перетворюємо вміст на нижній регістр для уникнення різниці між 'a' і 'A'
$fileContent = strtolower($fileContent);

// Ініціалізуємо масив частот для кожної букви алфавіту
$frequencies = array_fill_keys(range('a', 'z'), 0);

// Обчислюємо частоту кожної букви в тексті
foreach (str_split($fileContent) as $char) {
    if (ctype_alpha($char)) { // Якщо символ є буквою
        $frequencies[$char]++;
    }
}

// Відкриваємо файл X2 для запису
$fp = fopen('X2.txt', 'w');

// Записуємо таблицю частот у файл X2
foreach ($frequencies as $letter => $frequency) {
    fwrite($fp, "$letter: $frequency\n");
}

// Закриваємо файл X2
fclose($fp);

echo "Таблиця частот успішно записана в файл X2.txt\n";

?>