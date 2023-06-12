<?php
include_once 'connect.php';
if(isset($_POST['save']))
{	 
	$nama_negara = $_POST['nama_negara'];
	$sql = "INSERT INTO negara (nama_negara) VALUES ('$nama_negara')";
	
	if (mysqli_query($mysqli, $sql)) {
		echo "New record created successfully!";
	} else {
		echo "Error: Unable to execute $sql. " . mysqli_error($mysqli);
	}
	mysqli_close($mysqli);
}
?>