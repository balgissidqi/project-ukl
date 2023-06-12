<?php
include_once 'connect.php';
if(isset($_POST['save']))
{	 
	$nama_kuliner = $_POST['nama_kuliner'];
	$sql = "INSERT INTO kuliner (nama_kuliner) VALUES ('$nama_kuliner')";
	
	if (mysqli_query($mysqli, $sql)) {
		echo "New record created successfully!";
	} else {
		echo "Error: Unable to execute $sql. " . mysqli_error($mysqli);
	}
	mysqli_close($mysqli);
}
?>