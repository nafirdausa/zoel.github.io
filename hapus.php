<?php
require 'function.php';
$nik = $_GET["nik"];

if(hapus($nik) > 0 ){
    echo 
        "<script>
        alert('data berhasil dihapus');
        document.location.href='dataktp.php';
        </script>";
}else{
    echo 
        "<script>
        alert('data gagal dihapus');
        document.location.href='dataktp.php';
        </script>";
}

?>