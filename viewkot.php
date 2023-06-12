<html>
    <head>
        <title>view</title>
    </head>

    <body>
        <h3>kota</h3>
        <table border="2" class="kota">
        <button class="add"><a href="createkota.php">+ADD New</a></button>
            <tr>
                <th>id_kota</th>
                <th>nama_kota</th>
                <th>Action</th>
               
            </tr>
        <?php
            include "connect.php";
            $query_mysql = mysqli_query($mysqli,"SELECT * FROM kota") or die(mysql_error());
            while($data = mysqli_fetch_array($query_mysql)){
        ?>
            <tr>
               
                <td><?php echo $data['id_kota']; ?></td>
                <td><?php echo $data['nama_kota']; ?></td>
               <td>
               <button><a href='update.php?id_kota=<?=$data['id_kota']?>'>Edit</a></button>
                    <button><a href='deletekota.php?id_kota=<?=$data['id_kota']?>'>Delete</a></button>
               </td>
            </tr>
        
            <?php }?>
        </table>
    </body>
</html>