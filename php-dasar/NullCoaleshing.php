<?php

// Tanpa null coalescing
$data = [
    "action" => "Create"
];

if (isset($data['action'])) {
    $action = $data['action'];
} else {
    $action = 'nothing';
}

echo $action . PHP_EOL;

// Dengan null coalescing
$data = [];
$action = $data['action'] ?? 'nothing';
echo $action . PHP_EOL;
