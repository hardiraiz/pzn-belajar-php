<?php

function foo()
{
    echo "FOO" . PHP_EOL;
}

function bar()
{
    echo "BAR" . PHP_EOL;
}

$functionName = "foo";
$functionName();

$functionName = "bar";
$functionName();

// contoh penggunaan variabel function bawaan php
function sayHello(string $name, $filter): string 
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

// mencoba memanggil fungsi bawaan php strtoupper
sayHello("Hardi", "strtoupper"); 

// mencoba memanggil fungsi bawaan php strtolower
sayHello("Raiz", "strtolower");