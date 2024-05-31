
<?php

class Person
{
    const AUTHOR = "M Hardi Raiz";
    var string $name;
    var ?string $address = null;
    var string $country = "Indonesia";

    function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    function __destruct()
    {
        echo "Object Person {$this->name} is destroyed" . PHP_EOL;
    }

    function sayHello(?string $name)
    {
        if (is_null($name)) {
            echo "Hi, my name is {$this->name}" . PHP_EOL;
        } else {
            echo "Hi $name, my name is {$this->name}" . PHP_EOL;
        }
    }

    function info()
    {
        echo "AUTHOR : " . self::AUTHOR . PHP_EOL;
    }
}