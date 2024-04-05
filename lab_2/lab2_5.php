<?php

function countLinesInFiles($directory, $extension) {
    $totalLines = 0;

    // Отримуємо список файлів та каталогів у поточному каталозі
    $files = scandir($directory);

    foreach ($files as $file) {
        if ($file != '.' && $file != '..') {
            $filePath = $directory . '/' . $file;

            // Якщо файл є каталогом, рекурсивно викликаємо цю ж функцію для каталогу
            if (is_dir($filePath)) {
                $totalLines += countLinesInFiles($filePath, $extension);
            } else {
                // Якщо файл має вказане розширення, підраховуємо його рядки
                if (pathinfo($filePath, PATHINFO_EXTENSION) == $extension) {
                    $totalLines += count(file($filePath));
                }
            }
        }
    }

    return $totalLines;
}

$directory = "./"; // Починаємо з поточного каталогу
$extension = "php"; // Розширення файлів, які потрібно обробляти

$totalLines = countLinesInFiles($directory, $extension);

echo "Загальна кількість рядків у файлах з розширенням .$extension: $totalLines\n";

?>