<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    // $finalName = $filter($name); // cara pemanggilan serupa

    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Hardi", function($name) { return strtoupper($name); });
sayHello("Hardi", function(string $name): string { 
    return strtoupper($name); 
});
sayHello("Hardi", fn($name) => strtoupper($name));
sayHello("Hardi", "strtoupper");
sayHello("Hardi", "strtolower");