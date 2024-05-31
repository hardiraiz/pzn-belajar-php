<?php

// ASSIGN BY REFERENCE =====
// $name = "Eko";

// $otherName = &$name;
// $otherName = "Budi";

// echo $name . PHP_EOL; // Budi


// PASS BY REFERENCE =====
// function increment(int &$value): int
// {
//     return $value++;
// }

// $counter = 1;
// increment($counter);

// echo $counter . PHP_EOL;


// RETURNING REFERENCE =====
function &getValue()
{
    static $value = 100;
    return $value;
}

$a = &getValue();
$a = 200;

$b = &getValue();
echo $b . PHP_EOL;