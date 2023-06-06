<?php

date_default_timezone_set('Asia/Jakarta');

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

function uploadImage($requestName, $file, $dir)
{

    if(!empty($file)) {
        // Rename file foto. Contoh: foto-AG007.jpg
        $extFile = pathinfo($file, PATHINFO_EXTENSION);
        $fileRename = date('mdY_his') .'.'. $extFile;

        $dirImages = $dir;
        $pathImage = $dirImages . $fileRename;
     
        $file = $fileRename; // untuk keperluan Query INSERT

        move_uploaded_file($_FILES[$requestName]['tmp_name'], $pathImage);
    } else {
        $file = 'img/default.png';
    }

    return $file;
}

function getDateFormatDFY($date)
{
    return date('d F Y', strtotime($date));
}

function getDateFormatDFYIndonesian($date){
    // dd($date); 
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$break = explode('-', $date);
    
	return $break[2] . ' ' . $bulan[ (int)$break[1] ] . ' ' . $break[0];
}

?>