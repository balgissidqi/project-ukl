<html>
    <head>
        <title>view</title>
    </head>

    <body>
        <h3>sejarah</h3>
        <table border="2" class="sejarah">
            <tr>
                <th>id_sejarah</th>
                <th>id_kuliner</th>
                <th>id_kota</th>
                <th>sejarah</th>
               
            </tr>
        <?php
            include "koneksi.php";
            $query_mysql = mysqli_query($koneksi,"SELECT * FROM sejarah") or die(mysql_error());
           
            while($data = mysqli_fetch_array($query_mysql)){
        ?>
            <tr>
               
                <td><?php echo $data['id_sejarah']; ?></td>
                <td><?php echo $data['id_kuliner']; ?></td>
                <td><?php echo $data['id_kota']; ?></td>
                <td><?php echo $data['sejarah']; ?></td>
               
            </tr>
            <?php }?>
        </table>
    </body>
</html>