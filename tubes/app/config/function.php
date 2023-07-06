<?php

date_default_timezone_set('Asia/Jakarta');

function getDateFormatToAgo($date) {
    $nowTime = time();
    $toTimeDate = strtotime($date);
    $differenceTime = $nowTime - $toTimeDate;

    if ($differenceTime < 60) {
        $result = $differenceTime . ' detik yang lalu';
    } elseif ($differenceTime < 3600) {
        $result = floor($differenceTime / 60) . ' menit yang lalu';
    } elseif ($differenceTime < 86400) {
        $result = floor($differenceTime / 3600) . ' jam yang lalu';
    } elseif ($differenceTime < 604800) {
        $result = floor($differenceTime / 86400) . ' hari yang lalu';
    } elseif ($differenceTime < 2592000) {
        $result = floor($differenceTime / 604800) . ' minggu yang lalu';
    } elseif ($differenceTime < 31536000) {
        $result = floor($differenceTime / 2592000) . ' bulan yang lalu';
    } else {
        $result = floor($differenceTime / 31536000) . ' tahun yang lalu';
    }

    return $result;
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

function checkIsDemo(){
    if($_SESSION['user']['is_demo'] == true){
        $alert = [
            'type'  => 'warning',
            'message' => 'Akun demo tidak dapat menambah & mengubah data',
        ];

        $_SESSION['alert'] = $alert; 
        header("location:" . $_SERVER['HTTP_REFERER']);
        exit();
    }
}

function is_in_array($array, $key, $key_value){
    $within_array = false;
    foreach( $array as $k=>$v ){
        if( is_array($v) ){
            $within_array = is_in_array($v, $key, $key_value);
            if( $within_array == true ){
                break;
            }
        } else {
            if( $v == $key_value && $k == $key ){
                $within_array = true;
                break;
            }
        }
    }
    return $within_array;
}

?>