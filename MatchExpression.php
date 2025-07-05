<?php

$value = "A";
$result = '';

switch ($value) {
    case "A":
    case "B":
    case "C":
        $result = "Anda Lulus";
        break;
    case "D":
        $result = 'Anda Tidak Lulus';
        break;
    default:
        $result = 'Anda Salah Jurusan';
        break;
}

echo $result . PHP_EOL;


// Match
$nilai = "C";
$hasil = match ($nilai) {
    "A", "B", "C" => "Anda Lulus",
    "D" => "Anda Tidak Lulus",
    default => "Anda Salah Jurusan"
};

echo $hasil . PHP_EOL;


// Non Equals Check in Match Expression
$nilay = 44;

$hasyil = match (true) {
    $nilay >= 90 => "A",
    $nilay >= 80 => "B+",
    $nilay >= 70 => "B",
    $nilay >= 50 => "C",
    default => "E"
};

echo $hasyil . PHP_EOL;

$nama = "Pak Adi";

$final = match (true) {
    str_contains($nama, "Pak") => "Halo Pak",
    str_contains($nama, "Bu") => "Halo Bu",
    default => "Hello"
};

echo $final . PHP_EOL; // Hallo Pak
