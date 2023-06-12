<?php
session_start();

// Simpan username dan password yang valid di sini
$validUsername = "admin";
$validPassword = "password";

// Ambil nilai yang dikirimkan dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Cek apakah username dan password valid
if($username == $validUsername && $password == $validPassword) {
    $_SESSION['admin'] = $username;
    header("Location: admin.php");
    exit();
} else {
    header("Location: indexadmin.php?pesan=Username atau password salah");
    exit();
}