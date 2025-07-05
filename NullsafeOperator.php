<?php

class Address
{
    public ?string $country;
}

class User
{
    public ?Address $address;
}

// Sebelum
function getCountry(?User $user)
{
    if ($user != null) {
        if ($user->address != null) {
            return $user->address->country;
        }
    }
}

function getNegara(?User $user)
{
    return $user?->address?->country;
}
