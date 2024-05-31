<?php

$values = array(1, 2, 3, 4);
var_dump($values);
echo "\n";

echo "values[0]: ";
echo $values[0];
echo "\n";

$values[0] = "satu";
echo "\n";

echo "values[0]: ";
echo $values[0];
echo "\n\n";

$values[] = 5; // menambahkan nilai array posisi terakhir
unset($values[1]); // menghapus data di array, index otomatis hilang dari array
var_dump($values);
echo "\n";

echo "Length Array Value: ";
echo count($values);
echo "\n\n";

$names = ["M", "HARDI", "RAIZ"];
var_dump($names);
echo "\n\n";

// Array sebagai Map (key, value), menggunakan Array sebagai Map
// Secara default menggunakan index sebagai key, bisa diubah

$hardi = array(
    "id" => "A1",
    "name" => "Hardi",
    "age" => 25
);
var_dump($hardi);
echo "\n\n";

$raiz = [
    "id" => "A2",
    "name" => "Raiz",
    "age" => 24
];
var_dump($raiz);
echo "\n\n";

var_dump($raiz["id"]); // cara memanggil value berdasarkan key;
echo "\n\n";

// Array di dalam Array (Nested);
$lists = array(
    "id" => "hardi",
    "name" => "Hardi Raiz",
    "age" => 25,
    "address" => [
        "city" => "Pekanbaru",
        "country" => "Indonesia"
    ]
);
var_dump($lists);
