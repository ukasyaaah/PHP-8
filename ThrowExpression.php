<?php

// Sebelum

function sayHello(?string $name)
{
    if ($name == null) {
        throw new Exception('Kosong');
    }
    echo "Hello $name";
}


function sayHelloBaru(?string $name)
{
    $result = $name != NUll  ? "Hello $name" : throw new Exception('Gaboleh null');

    echo $result . PHP_EOL;
}


// sayHello(null);
sayHelloBaru('Hani');