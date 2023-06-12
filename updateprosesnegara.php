<?php
include "connect.php";

if (count($_POST) > 0) {
    $id_negara = $_POST['id_negara'];
    $nama_negara = $_POST['nama_negara'];

    $query = "UPDATE negara SET nama_negara='$nama_negara' WHERE id_negara='$id_negara'";
    mysqli_query($mysqli, $query);

    $message = "Record Modified Successfully";
    header("location:updatenegara.php");
}

$id_negara = isset($_GET['id_negara']) ? $_GET['id_negara'] : '';
$result = mysqli_query($mysqli, "SELECT * FROM negara WHERE id_negara='$id_negara'");
$row = mysqli_fetch_array($result);

if ($row) {
    $id_negara_value = isset($row['id_negara']) ? $row['id_negara'] : '';
    $nama_negara_value = isset($row['nama_negara']) ? $row['nama_negara'] : '';
} else {
    $id_negara_value = '';
    $nama_negara_value = '';
}
?>

<html>
<head>
    <title>Update Data Negara</title>
</head>
<body>
    <form name="frmNegara" method="post" action="">
        <div><?php if(isset($message)) { echo $message; } ?></div>
        <div style="padding-bottom:5px;">
            <a href="viewneg.php">List Kuliner</a>
        </div>
        id_negara: <br>
        <input type="hidden" name="id_negara" class="txtField" value="<?php echo $id_negara_value; ?>">
        <input type="text" name="id_negara_display" value="<?php echo $id_negara_value; ?>" disabled>
        nama_negara: <br>
        <input type="text" name="nama_negara" class="txtField" value="<?php echo $nama_negara_value; ?>">
        <input type="submit" name="submit" value="Submit" class="button">
    </form>
</body>
</html>
