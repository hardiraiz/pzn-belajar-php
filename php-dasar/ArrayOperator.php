<?php

$first = [
    "first_name" => "Hardi"
];

$last = [
    "last_name" => "Raiz"
];

var_dump($first + $last);

$a = [
    "first_name" => "Hardi",
    "last_name" => "Raiz"
];

$b = [
    "last_name" => "Raiz",
    "first_name" => "Hardi"
];

var_dump($a + $b);
var_dump($a == $b);
var_dump($a === $b);

$value1 = [1, 2, 3];
$value2 = [1, 3, 2];

var_dump($value1 + $value2);
var_dump($value1 == $value2);
