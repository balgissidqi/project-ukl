<?php
include_once 'connect.php';
$sql = "DELETE FROM kota WHERE id_kota='" . $_GET["id_kota"] . "'";
if (mysqli_query($mysqli, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($mysqli);
}
mysqli_close($mysqli);
?>