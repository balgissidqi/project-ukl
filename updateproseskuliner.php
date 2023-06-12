<?php
include "connect.php";

if (count($_POST) > 0) {
    $id_kuliner = $_POST['id_kuliner'];
    $nama_kuliner = $_POST['nama_kuliner'];

    $query = "UPDATE kuliner SET nama_kuliner='$nama_kuliner' WHERE id_kuliner='$id_kuliner'";
    mysqli_query($mysqli, $query);

    $message = "Record Modified Successfully";
    header("location:updatekuliner.php");
}

$id_kuliner = isset($_GET['id_kuliner']) ? $_GET['id_kuliner'] : '';
$result = mysqli_query($mysqli, "SELECT * FROM kuliner WHERE id_kuliner='$id_kuliner'");
$row = mysqli_fetch_array($result);

if ($row) {
    $id_kuliner_value = isset($row['id_kuliner']) ? $row['id_kuliner'] : '';
    $nama_kuliner_value = isset($row['nama_kuliner']) ? $row['nama_kuliner'] : '';
} else {
    $id_kuliner_value = '';
    $nama_kuliner_value = '';
}
?>

<html>
<head>
    <title>Update Data Kuliner</title>
</head>
<body>
    <form name="frmKuliner" method="post" action="">
        <div><?php if(isset($message)) { echo $message; } ?></div>
        <div style="padding-bottom:5px;">
            <a href="viewkul.php">List Kuliner</a>
        </div>
        id_kuliner: <br>
        <input type="hidden" name="id_kuliner" class="txtField" value="<?php echo $id_kuliner_value; ?>">
        <input type="text" name="id_kuliner_display" value="<?php echo $id_kuliner_value; ?>" disabled>
        nama_kuliner: <br>
        <input type="text" name="nama_kuliner" class="txtField" value="<?php echo $nama_kuliner_value; ?>">
        <input type="submit" name="submit" value="Submit" class="button">
    </form>
</body>
</html>
