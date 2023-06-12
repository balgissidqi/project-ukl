<?php 

$databaseHost = "localhost";
$databaseName = "kuliner";
$databaseUsername = "root";
$databasePassword = "";

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if (!$mysqli) {
    die("koneksi gagal : " . mysqli_connect_error());
} else {
    echo "koneksi berhasil";
}
?>