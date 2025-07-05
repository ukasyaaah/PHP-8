<?php

trait Sample
{
    abstract function sample(string $name): string;
}

class SampleClass
{
    use Sample;

    // error
    public function sample(int $angka): string
    {
        return $angka;
    }
}

class ParentClass
{
    function method(array $a) {}
}

class ChildClass extends ParentClass
{
    //Error
    // function method(int $b) {}

}
