<?php 

$databaseHost = "localhost";
$databaseName = "kuliner";
$databaseUsername = "root";
$databasePassword = "";

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if (!$mysqli) {
    die("koneksi gagal : " . mysqli_connect_error());
} else {
    echo "koneksi berhasil"
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai input dari form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Mengecek keberadaan username dan password dalam database
    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = $mysqli->query($sql);

    if ($result->num_rows == 1) {
        // Login berhasil
        session_start();
        $_SESSION["username"] = $username;
        header("Location: index2.html"); // Ganti home.php dengan halaman setelah login
        exit();
    } else {
        // Login gagal
        $error = "Username atau password salah";
    }
}

$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="login.css" media="screen" title="no title">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<title>KURA login</title>	
</head>

<body>
	<div class="input">
		<h1>LOGIN</h1>
		<form action="login.php" method="POST">

		
		<div class="box-input">
			<i class="fa-regular fa-user"></i>
			<input type="text" name="username" placeholder="Username" required>
		</div>
		<div class="box-input">
			<i class="fa-solid fa-lock-keyhole"></i>
			<input type="password" name="password" placeholder="Password" required>
		</div>
			<div class="box-input">
				<i class="fa-regular fa-envelope"></i>
                <input type="text" name="email" placeholder="Email">
			</div>
				<button type="submit" name="login" class="btn-input">login</button>
				<div class="bottom">
					<p>belum punya akun kah?</p>
						<a href="register.html">register disini yaa </a>
				</div>
		</form>
		</div>
</body>
</html>