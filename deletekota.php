<?php
include_once 'connect.php';
$result = mysqli_query($mysqli,"SELECT * FROM kota");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Delete Data Kota</title>
</head>
<body>
<table border="2">
	<tr>
	<td>id kota</td>
	<td>nama kota</td>
	<td>Action</td>
	</tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
	<td><?php echo $row["id_kota"]; ?></td>
	<td><?php echo $row["nama_kota"]; ?></td>
	<td><a href="deleteproseskota.php?id_kota=<?php echo $row["id_kota"]; ?>">Delete</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
</body>
</html>