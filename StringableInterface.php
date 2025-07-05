<?php

function saySomething(Stringable | string $say)
{
    echo "Kamu bilang: $say" . PHP_EOL;
}

// saySomething('Hallo');


class User
{
    function __toString(): string
    {

        return "Hallo Saya Ukhasyah" . PHP_EOL;
    }
}

$user = new User();
echo $user;

saySomething($user);
