<?php

class Bebas
{
    public string | int | bool | array $data;
}

$bebas = new Bebas();
echo $bebas->data = 'hahah' . PHP_EOL;


function Bebas(string | int $data)
{
    if (is_int($data)) {
        echo "Ini Int" . PHP_EOL;
    } else if (is_string($data)) {
        echo "Ini String" . PHP_EOL;
    }
}

Bebas(934);
Bebas('Hahah');
