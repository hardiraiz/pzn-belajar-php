<?php

// function sayHello() {
//     echo "Hello Function" . PHP_EOL;
// }

// sayHello();
// sayHello();

// $buat = false;

// if ($buat) {
//     function hi() {
//         echo "Hi" . PHP_EOL;
//     }
// }

// hi();


// Function Argument
// function sayHello($name) {
//     echo "Hello $name" . PHP_EOL;
// }

// sayHello("Hardi");
// sayHello("Raiz");

// Function Default Argument Value
function sayHello($name = 'Anonymous') {
    echo "Hello $name" . PHP_EOL;
}

sayHello();
sayHello("Hardi");