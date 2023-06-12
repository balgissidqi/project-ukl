<?php

$username = $_POST["Username"];
$password = $_POST["Password"];
$email = $_POST["Email"];

$query_sql = "INSERT INTO user (username, password, email)
            VALUES ('$username', '$password', '$email')";

if (mysqli_query($mysqli, $query_sql)) {
    header("location: login.html");
} else {
    echo "pendaftaran gagal : " . mysqli_error($mysqli);
}