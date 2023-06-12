<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
</head>
<body>
    <h1>Admin Login</h1>
    <?php
    session_start();

    // Cek apakah pengguna sudah login
    if(isset($_SESSION['admin'])) {
        header("Location: admin.php");
        exit();
    }

    // Cek apakah terdapat pesan error
    if(isset($_GET['pesan'])) {
        echo "<p style='color: red;'>".$_GET['pesan']."</p>";
    }
    ?>
    <form method="POST" action="loginadmin.php">
        <input type="text" name="username" placeholder="Username" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>