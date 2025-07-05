<?php

function sayHello(string $first, string $last)
{
    echo "Hello $first $last" . PHP_EOL;
}

// Tanpa named Argumnent
sayHello('Ukhasyah', 'Fauzan');

// Dengan Named Argument
sayHello(last: 'Fauzan', first: "Ukhasyah",);



function sayHi(string $first, string $mid = "", string $last)
{
    echo "Hi $first $mid $last";
}

// Tanpa Named Argument
// sayHi('ukhasyah', 'fauzan'); // Error

// Dengan Named Argument
sayHi(first: 'Ukhasyah', last: 'Fauzan'); // error, harus pake mid




