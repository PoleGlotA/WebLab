<?php

function printWordsOnce($sequence) {
    // Розділити рядок на слова
    $words = explode(' ', $sequence);
    
    // Ініціалізувати пустий асоціативний масив для підрахунку кількості входжень кожного слова
    $wordCount = [];
    
    // Підрахунок кількості входжень кожного слова
    foreach ($words as $word) {
        // Видаляємо спеціальні символи, якщо вони є
        $word = preg_replace('/[^A-Za-z0-9\-]/', '', $word);
        
        // Збільшуємо лічильник для поточного слова
        if (isset($wordCount[$word])) {
            $wordCount[$word]++;
        } else {
            $wordCount[$word] = 1;
        }
    }
    
    // Надрукувати слова, які зустрічаються тільки один раз
    foreach ($wordCount as $word => $count) {
        if ($count == 1) {
            echo $word . " ";
        }
    }
}

// Послідовність слів
$sequence = "apple banana orange banana cherry orange";

// Виклик функції для надрукування слів, які зустрічаються тільки один раз
printWordsOnce($sequence);

?>