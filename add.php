<!DOCTYPE html>
<html>
<head>
    <title>Create Data Baru</title>
</head>

<body>
    <h1>Create Data Baru</h1>

    <h3>Kuliner</h3>
    <form action="viewkul2.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td> Nama Kuliner</td>
                <td><input type="text" name="id_kuliner"></td>
            </tr>
            <tr>
                <td>Nama Kota</td>
                <td><input type="text" name="nama_kuliner"></td>
            </tr>
            <tr>
                <td>Nama Negara</td>
                <td><input type="text" name="nama_kuliner"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php
    include "connect.php";

    if(isset($_POST['Submit'])) {
        $id_kuliner = $_POST['nama_kuliner'];
        $nama_kuliner = $_POST['nama_kota'];
        $nama_negara = $_POST['nama_negara'];
       

        $result = mysqli_query($mysqli, "INSERT INTO kuliner (id_kuliner, nama_kuliner, id_kota, id_negara) VALUES ('$id_kuliner', '$nama_kuliner', $nama_negara)");

        if ($result) {
            echo "Data berhasil ditambahkan.";
            header("Location: viewkul2.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($mysqli);
        }
    }
    ?>
</body>
</html>
