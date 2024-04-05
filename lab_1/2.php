<?php

function sumFirstLastDigits($n, $m) {
    // Перетворюємо число n у рядок
    $numStr = (string)$n;
    
    // Знаходимо довжину числа n
    $length = strlen($numStr);
    
    // Ініціалізуємо змінні для сум перших та останніх m цифр
    $sumFirst = 0;
    $sumLast = 0;
    
    // Перевіряємо чи m не більше довжини числа n
    if ($m > $length) {
        $m = $length;
    }
    
    // Сумуємо перші m цифр
    for ($i = 0; $i < $m; $i++) {
        $sumFirst += intval($numStr[$i]);
    }
    
    // Сумуємо останні m цифр
    for ($i = $length - 1; $i >= $length - $m; $i--) {
        $sumLast += intval($numStr[$i]);
    }
    
    // Повертаємо суми
    return array($sumFirst, $sumLast);
}

// Приклад використання функції
$n = 123456789; // Вхідне число
$m = 3; // Кількість цифр для сумування

list($sumFirst, $sumLast) = sumFirstLastDigits($n, $m);

echo "Сума перших $m цифр числа $n: $sumFirst\n";
echo "Сума останніх $m цифр числа $n: $sumLast\n";

?>