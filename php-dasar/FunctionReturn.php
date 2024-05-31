<?php

function sum (int $first, int $second) {
    return $first + $second;
}

$total = sum(10, 10);
var_dump($total);

$total = sum(20, 20);
var_dump($total);

// return kondisi
function getFinalValue(int $value) {
    return $value >= 60 ? "Anda Lulus" : "Anda Gagal";
}

$result = getFinalValue(70);
var_dump($result);

// return type declaration
// return type telah ditentukan
function summ(int $first, int $second): int 
{
    return $first + $second;
}

function getFinalValuee(int $value): string 
{
    return $value >= 60 ? "Anda Lulus" : "Anda Gagal";
}

$total = sum(10, 10);
var_dump($total);

$result = getFinalValue(70);
var_dump($result);