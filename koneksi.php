<?php
$koneksi = mysqli_connect ("localhost","root","");
if($koneksi) {
    echo "koneksi berhasil", "<br>";
} else {
    echo "koneksi tidak berhasil", "<br>";
}

$db = mysqli_select_db ($koneksi,"kuliner");
if($db) {
    echo "koneksi ke database berhasil";
} else {
    echo "koneksi ke database belum berhasil";
}