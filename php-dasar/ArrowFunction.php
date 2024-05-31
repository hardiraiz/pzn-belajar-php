<?php

$firstName = "Hardi";
$lastName = "Raiz";

$sayHelloHardi = fn() => "Hello $firstName $lastName" . PHP_EOL;
echo $sayHelloHardi();

$returnNumber = fn($num1, $num2) => $num1 + $num2;
echo $returnNumber(10, 20) . PHP_EOL;
