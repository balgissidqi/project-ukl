<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
</head>
<body>
    
<?php
session_start();

// Cek apakah pengguna sudah login sebagai admin
if(!isset($_SESSION['admin'])) {
    header("Location: indexadmin.php");
    exit();
}

// Tampilkan halaman admin di sini
echo "<h1>Selamat datang, ".$_SESSION['admin']."</h1>";
echo "<p>Ini adalah halaman admin yang terproteksi.</p>";
echo "<a href='logoutadmin.php'>Logout</a>";
?>
<div class="container">
    <ul class="container">
<li><a href="delete.php">HAPUS</a></li>
<li><a href="add.php">BUAT</a></li>
<li><a href="update.php">EDIT</a></li>
    </ul>
    </div>

</body>
</html>