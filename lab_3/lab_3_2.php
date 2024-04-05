<?php
class Country {
    public $name;
    public $population;
    public $capital;

    public function __construct($name, $population, $capital) {
        $this->name = $name;
        $this->population = $population;
        $this->capital = $capital;
    }
}
$countries = array(
    new Country("USA", 331002651, "Washington D.C."),
    new Country("China", 1439323776, "Beijing"),
    new Country("India", 1380004385, "New Delhi")
);
// HTML виведення результату
echo "<table border='1'>";
foreach ($countries as $country) {
    echo "<tr><td>Name:</td><td>{$country->name}</td></tr>";
    echo "<tr><td>Population:</td><td>{$country->population}</td></tr>";
    echo "<tr><td>Capital:</td><td>{$country->capital}</td></tr>";
}
echo "</table>";
echo " <br> <a href='index.html'>Назад</a> ";
?>