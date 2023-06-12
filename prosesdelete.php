<?php
$databaseHost = "localhost";
$databasename = "kuliner";
$databaseusername = "root";
$databasepassword = "";

$mysqli = mysqli_connect($databaseHost, $databaseusername, $databasepassword, $databasename);

if (!$mysqli) {
    die("koneksi gagal : " . mysqli_connect_error());
} else {
    echo "koneksi berhasil";
}
$sql = "DELETE FROM resep WHERE id_resep='" . $_GET["id_resep"] . "'";
if (mysqli_query($mysqli, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($mysqli);
}
mysqli_close($mysqli);
?>