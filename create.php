<html> 
    <head>
         <h1>Create Data Baru</head>
    </head>

    <body>
        <h3>kuliner</h3>
        <form action="viewkul.php" method="post" name="form1">
            <table width="25%" border="0">
                <tr>
                    <td>nama_kuliner</td>
                    <td><input type="text" name="Nama kuliner"></td>
                </tr>
                
                <tr>
                    <td></td>
                    <td><input type="submit" name="Submit" value="Add"></td>
                </tr>
                <?php
                
                $databaseHost = "localhost";
                $databasename = "kuliner";
                $databaseusername = "root";
                $databasepassword = "";
                
                $mysqli = mysqli_connect($databaseHost, $databaseusername, $databasepassword, $databasename);
                
                if (!$mysqli) {
                    die("koneksi gagal : " . mysqli_connect_error());
                } else {
                    echo "koneksi berhasil";
                }

                if(isset($_POST['Submit'])) {
                    $id_kuliners= $_POST['id_kuliner'];
                    $nama_kuliners= $_POST['nama_kuliner'];
                    $id_kotas= $_POST['id_kota'];
                    

                    $result = mysqli_query($mysqli, "INSERT INTO kuliner(id_kuliner, nama_kuliner, id_kota) VALUES('$id_kuliners', '$nama_kuliners', '$id_kotas')");
                   
                    header("location:viewkul.php");
                }
                ?>
            </table>    
        </form>


    </body>
</html>
