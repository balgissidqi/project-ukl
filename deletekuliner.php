<?php
include_once 'connect.php';
$result = mysqli_query($mysqli,"SELECT * FROM kuliner");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Delete Data Kuliner</title>
</head>
<body>
<table border="2">
	<tr>
	<td>id kuliner</td>
	<td>nama kuliner</td>
	<td>Action</td>
	</tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
	<td><?php echo $row["id_kuliner"]; ?></td>
	<td><?php echo $row["nama_kuliner"]; ?></td>
	<td><a href="deleteproseskuliner.php?id_kuliner=<?php echo $row["id_kuliner"]; ?>">Delete</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
</body>
</html>