<?php
include_once 'connect.php';
if(isset($_POST['save']))
{	 
	$nama_kota = $_POST['nama_kota'];
	$sql = "INSERT INTO kota (nama_kota) VALUES ('$nama_kota')";
	
	if (mysqli_query($mysqli, $sql)) {
		echo "New record created successfully!";
	} else {
		echo "Error: Unable to execute $sql. " . mysqli_error($mysqli);
	}
	mysqli_close($mysqli);
}
?>
