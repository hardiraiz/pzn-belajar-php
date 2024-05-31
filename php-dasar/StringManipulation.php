<?php

$name = "M Hardi Raiz";

echo "Name \t: " . $name . PHP_EOL; // PHP_EOL = End Of Line (Enter)
echo "Nilai: \t: " . 100 . "\n";

// konversi nilai
$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"100.11";
var_dump($valueFloat);

// mengakses karakter
$name = "Raiz";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[5] . PHP_EOL;

// variabel parsing
$name = "Hardi";
echo "Hello $name, Selamat Datang" . PHP_EOL;

// curly brace
$var = "var";
echo "This is {$var}s" . PHP_EOL;