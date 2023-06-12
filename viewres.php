<html>
    <head>
        <title>view</title>
    </head>

    <body>
        <h3>resep</h3>
        <table border="2" class="resep">
            <tr>
                <th>id_resep</th>
                <th>id_kuliner</th>
                <th>alat_dan_bahan</th>
                <th>cara_masak</th>
               
            </tr>
        <?php
            include "koneksi.php";
            $query_mysql = mysqli_query($koneksi,"SELECT * FROM resep") or die(mysql_error());
           
            while($data = mysqli_fetch_array($query_mysql)){
        ?>
            <tr>
               
                <td><?php echo $data['id_resep']; ?></td>
                <td><?php echo $data['id_kuliner']; ?></td>
                <td><?php echo $data['alat_dan_bahan']; ?></td>
                <td><?php echo $data['cara_masak']; ?></td>
               
            </tr>
            <?php }?>
        </table>
    </body>
</html>