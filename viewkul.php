<html>
    <head>
        <title>view</title>
    </head>

    <body>
        <h3>kuliner</h3>
        <table border="2" class="kuliner">
            <button class="add_new"><a href="createkuliner.php">+Add New</a></button>
            <tr>
                <th>Id Kuliner</th>
                <th>Nama Kuliner</th>
                <th>Action</th>
                
               
            </tr>
            <?php
            include "connect.php";
            $query_mysql = mysqli_query($mysqli,"SELECT * FROM kuliner") or die(mysql_error());
            while($data = mysqli_fetch_array($query_mysql)){
        ?>
            <tr>
               
                <td><?php echo $data['id_kuliner']; ?></td>
                <td><?php echo $data['nama_kuliner']; ?></td>
               <td>
               <button><a href='updatekuliner.php?id_kuliner=<?=$data['id_kuliner']?>'>Edit</a></button>
                    <button><a href='deletekuliner.php?id_kuliner=<?=$data['id_kuliner']?>'>Delete</a></button>
               </td>
            </tr>
            <?php }?>
        </table>
    </body>
</html>