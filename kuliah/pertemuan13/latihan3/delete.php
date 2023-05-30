<?php
require('functions.php');


$id = htmlspecialchars($_GET['id']);

if(delete($id) > 0){
    echo "<script> 
        alert('Mahasiswa berhasil dihapus!');
        document.location.href = 'index.php';
    </script>";
} else {
    echo "<script> 
        alert('Mahasiswa gagal dihapus!');
        document.location.href = 'index.php';
    </script>";
}
?>