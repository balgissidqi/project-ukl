<?php
include "connect.php";

if (count($_POST) > 0) {
    $id_kota = $_POST['id_kota'];
    $nama_kota = $_POST['nama_kota'];

    $query = "UPDATE kota SET nama_kota='$nama_kota' WHERE id_kota='$id_kota'";
    mysqli_query($mysqli, $query);

    $message = "Record Modified Successfully";
    header("location:update.php");
}

$id_kota = isset($_GET['id_kota']) ? $_GET['id_kota'] : '';
$result = mysqli_query($mysqli, "SELECT * FROM kota WHERE id_kota='$id_kota'");
$row = mysqli_fetch_array($result);

if ($row) {
    $id_kota_value = isset($row['id_kota']) ? $row['id_kota'] : '';
    $nama_kota_value = isset($row['nama_kota']) ? $row['nama_kota'] : '';
} else {
    $id_kota_value = '';
    $nama_kota_value = '';
}
?>

<html>
<head>
    <title>Update Data Kota</title>
</head>
<body>
    <form name="frmKota" method="post" action="">
        <div><?php if(isset($message)) { echo $message; } ?></div>
        <div style="padding-bottom:5px;">
            <a href="viewkot.php">List Kota</a>
        </div>
        id_kota: <br>
        <input type="hidden" name="id_kota" class="txtField" value="<?php echo $id_kota_value; ?>">
        <input type="text" name="id_kota_display" value="<?php echo $id_kota_value; ?>" disabled>
        nama_kota: <br>
        <input type="text" name="nama_kota" class="txtField" value="<?php echo $nama_kota_value; ?>">
        <input type="submit" name="submit" value="Submit" class="button">
    </form>
</body>
</html>
