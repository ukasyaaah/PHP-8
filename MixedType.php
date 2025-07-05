<?php

class Baru
{
    public array | int | bool  | float| null| object |string $union;
}

function testMixed(mixed $param): mixed {
    if(is_array($param)){
        return 'Array';
    }else {
        return 'bukan array';
    }
}

echo testMixed('haloo');
