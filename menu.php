<?php
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>KURA ~KUlineR Asia~</title>
        <link rel="stylesheet" type="text/css" href="style2.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    </head>
    
    <body>
        <div class="medsos">
            <div class="container">
                <ul>
                    <li><a href="https://instagram.com/blgss_sdqii?igshid=ZDdkNTZiNTM="><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="https://www.tiktok.com/@balgissidqi?_t=8aaMYuDoLKM&_r=1"><i class="fa-brands fa-tiktok"></i></a></li>
                </ul>
            </div>
        </div>
        <header>
            <div class="container">
             <h1><a href="index2.html">KURA ~KUlineR Asia~</a></h1>
             <ul>
                    <li><a href="home.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li class="active"><a href="menu.html">MENU</a></li>
                    <li><a href="login.php">LOGIN</a></li>
                   
             </ul>
            </div>
        </header>

        <h3>negara</h3>
        <table border="2" class="negara">
            <tr>
                <th>id_negara</th>
                <th>nama_negara</th>
                
            </tr>
        <?php
            include "koneksi.php";
            $query_mysql = mysqli_query($koneksi,"SELECT * FROM negara") or die(mysqli_error());
            while($data = mysqli_fetch_array($query_mysql)){
        ?>
            <tr>
                <td><?php echo $data['id_negara']; ?></td>
                <td><?php echo $data['nama_negara']; ?></td>
                 
            </tr>
            <?php }?>
        </table>
        
        <a href="join.php"></a>
</body>
</html>
?>