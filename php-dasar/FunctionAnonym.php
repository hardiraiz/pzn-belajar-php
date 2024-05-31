<?php

$sayHello = function(string $name)
{
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Hardi");
$sayHello("Raiz");



// Anonymous function sebagai argument
function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good Bye $finalName" . PHP_EOL;
}

sayGoodBye("Hardi", function (string $name) {
    return strtoupper($name);
});

// Mengakses Variabel di Luar Anonymous Function
$firstName = "Hardi";
$lastName = "Raiz";



// Mengakses Variabel Luar
$sayHelloTo = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHelloTo();