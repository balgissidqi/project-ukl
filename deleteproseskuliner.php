<?php
include_once 'connect.php';
$sql = "DELETE FROM kuliner WHERE id_kuliner='" . $_GET["id_kuliner"] . "'";
if (mysqli_query($mysqli, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($mysqli);
}
mysqli_close($mysqli);
?>