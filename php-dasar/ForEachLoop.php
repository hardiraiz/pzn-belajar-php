<?php

$names = ["M", "Hardi", "Raiz"];

// Tanpa For Each
for ($i = 0; $i < count($names); $i++) {
    echo "Hello " . $names[$i] . PHP_EOL;
}

// For Each
foreach ($names as $name) {
    echo "Hello " . $name . PHP_EOL;
}

// For Each Dengan Key
$person = [
    "first_name" => "M",
    "middle_name" => "Hardi",
    "last_name" => "Raiz"
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}