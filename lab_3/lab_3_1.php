<?php

// Отримати значення з input
$num3Inserted = $_POST['num3Inserted'];

// Перевірити, чи число дійсне
if (!is_numeric($num3Inserted)) {
    echo "<p>Введіть дійсне число!</p>";
    exit;
}
class MultiplicationTable {
    private $number;

    public function __construct($number) {
        $this->number = $number;
    }

    public function calculate() : array 
    {
        $table = [];
        for ($i = 1; $i <= 10; $i++) {
            $table[$i] = $this->number * $i;
        }
        return $table;
    }
    public function printTable(): void
    {
        echo "<h3>Таблиця множення для числа {$this->number}</h3>";
        echo "<table border='1'>";
        echo "<tr><th>Число</th><th>Результат</th></tr>";
        foreach ($this->calculate() as $key => $value) {
            echo "<tr><td>{$key}</td><td>{$value}</td></tr>";
        }
        echo "</table>";
    }
}

// Створити об'єкт класу MultiplicationTable
$table = new MultiplicationTable($num3Inserted);

// Вивести таблицю множення
$table->printTable();
echo " <br> <a href='index.html'>Назад</a> ";