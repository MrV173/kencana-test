<?php

class Data {
    private $name;
    private $age;

    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    function getName() {
        return $this->name;
    }

    function isAdult() {
        return $this->age >= 18 ? "an Adult" : "Not an Adult";
    }
}

$calvin = new Data("Calvin", 13);
$chris = new Data("Chris", 19);

echo "Hello, " . $calvin->getName() . "! You are " . $calvin->isAdult() . PHP_EOL;
echo "Hello, " . $chris->getName() . "! You are " . $chris->isAdult() . PHP_EOL;

?>
