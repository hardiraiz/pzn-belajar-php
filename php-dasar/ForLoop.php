<?php

// Perulangan tanpa henti
// for (; ;) {
//     echo "Hello For Loop" . PHP_EOL;
// }

// Perulangan dengan kondisi
// $counter = 1;
// for (; $counter <= 10;) {
//     echo "Hello For Loop : " . $counter . PHP_EOL;
//     $counter++;
// }

// Perulangan dengan init statement
// for ($counter = 1; $counter <= 10;) {
//     echo "Hello For Loop : " . $counter . PHP_EOL;
//     $counter++;
// }

// Perulangan dengan post statement
// for ($counter = 1; $counter <= 10; $counter++) {
//     echo "Hello For Loop : " . $counter . PHP_EOL;
// }

// Sintaks alternatif for loop
for ($counter = 1; $counter <= 10; $counter++) :
    echo "Hello For Loop : " . $counter . PHP_EOL;
endfor;