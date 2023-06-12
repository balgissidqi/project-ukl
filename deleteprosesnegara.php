<?php
include_once 'connect.php';
$sql = "DELETE FROM negara WHERE id_negara='" . $_GET["id_negara"] . "'";
if (mysqli_query($mysqli, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($mysqli);
}
mysqli_close($mysqli);
?>