<html>
    <head>
        <title>view</title>
    </head>

    <body>
        <h3>negara</h3>
        <table border="2" class="negara">
        <button class="add_new"><a href="createnegara.php">+Add New</a></button>
            <tr>
                <th>id_negara</th>
                <th>nama_negara</th>
                <th>Action</th>
                
            </tr>
        <?php
            include "connect.php";
            $query_mysql = mysqli_query($mysqli,"SELECT * FROM negara") or die(mysqli_error());
            while($data = mysqli_fetch_array($query_mysql)){
        ?>
            <tr>
                <td><?php echo $data['id_negara']; ?></td>
                <td><?php echo $data['nama_negara']; ?></td>
                <td>
               <button><a href='updatenegara.php?id_negara=<?=$data['id_negara']?>'>Edit</a></button>
                    <button><a href='deletenegara.php?id_negara=<?=$data['id_negara']?>'>Delete</a></button>
               </td>
                 
            </tr>
            <?php }?>
        </table>
    </body>
</html>