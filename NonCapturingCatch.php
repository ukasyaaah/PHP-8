<?php

function validate(mixed $name)
{
    if (trim($name) == '') {
       throw new Exception('Gabole Kosong');
    }
}

try {
    validate('    ');
} catch (Exception) {
    echo "Invalid";
}
