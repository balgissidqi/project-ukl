<html>
<head>
    <h1>Tabel</h1>
</head>
<body>
    <h3>Data Kuliner</h3>
    <button><a href="add.php">Kuliner</a><br/><br/></button>

    <table border="1" class="table">
        <tr>
            <th>id_kuliner</th>
            <th>nama_kuliner</th>
            <th>id_kota</th>
        </tr>
    <?php
    include "join.php";
    $query="SELECT kuliner.nama_kuliner, kota.nama_kota
    FROM kuliner, kota
    WHERE kuliner.id_kota=kota.id_kota";
    $query_mysql =mysqli_query($mysqli,$query) or die(mysqli_error());
    $nomor = 1;
    while($data = mysqli_fetch_array($query_mysql)){
    ?>
        <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $data['nama_kuliner']; ?></td>
            <td><?php echo $data['nama_kota']; ?></td>
            
        </tr>
        <?php } ?>

    </table>

</body>

</html>