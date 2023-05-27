<?php

function getUpdatedAtFormatDestination($date)
{
    $timestamp = strtotime($date);
    // Hitung selisih waktu dalam detik
    $diff = time() - $timestamp;
    // Hitung selisih waktu dalam jam
    $hours = round($diff / (60 * 60));
    // Membuat format "x jam yang lalu"
    $format = "{$hours} jam yang lalu";
    
    return $format;
}

function now(){
    $date = date('Y-m-d H:i:s');
    return $date;
}

function createUid($data = null) {
    // Generate 16 bytes (128 bits) of random data or use the data passed into the function.
    $data = $data ?? random_bytes(16);
    assert(strlen($data) == 16);
    
    // Set version to 0100
    $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
    // Set bits 6-7 to 10
    $data[8] = chr(ord($data[8]) & 0x3f | 0x80);
    // Output the 36 character UUID.
    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
}

function dd($value)
{
echo "<pre>";
var_dump($value);
die;
echo "</pre>";
}
?>