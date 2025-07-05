<?php

#[Attribute(Attribute::TARGET_METHOD | Attribute::TARGET_CLASS)]
class CekNull {}

#[Attribute(Attribute::TARGET_PROPERTY)]
class Length
{
    var int $min;
    var int $max;

    public function __construct(int $min, int $max)
    {
        $this->min = $min;
        $this->max = $max;
    }
}

class LoginReq
{
    #[CekNull]
    #[Length(min: 4, max: 12)]
    public string $username;

    #[CekNull]
    #[Length(min: 4, max: 12)]
    public string $password;
}

function validateLength(ReflectionProperty $property, object $object): void
{
    if (!$property->isInitialized($object) && is_null($property->getValue())) {
        return;
    }

    // Ambil Value Object
    $value = $property->getValue($object);

    // Ambil Attribute Length
    $attributes = $property->getAttributes(Length::class);


    foreach ($attributes as $attribute) {
        // Bikin objek dari attribute (Length) dgn newInstance
        $length = $attribute->newInstance();

        // Tangkap panjang value
        $valueLength = strlen($value);

        if ($valueLength < $length->min) {
            throw new Exception("$property->name Kurang Panjang");
        } else if ($valueLength > $length->max) {
            throw new Exception("$property->name Terlalu Panjang");
        }
    }
}

function validateNotNull(ReflectionProperty $property, object $object): void
{
    $attributes = $property->getAttributes(CekNull::class);
    if (count($attributes) > 0) {
        if (!$property->isInitialized($object)) {
            throw new Exception("Property $property->name in Null");
        } else if ($property->getValue($object) == null) {
            throw new Exception("Property $property->name in Null");
        }
    }
    echo 'Berhasil Login' . PHP_EOL;
}


function validate(object $object): void
{
    $class = new ReflectionClass($object);
    $properties = $class->getProperties();
    foreach ($properties as $property) {
        validateNotNull($property, $object);
        validateLength($property, $object);
    }
}

$req = new LoginReq();
$req->username = '1234';
$req->password = '1234';
validate($req);
