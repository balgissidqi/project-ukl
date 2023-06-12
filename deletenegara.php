<?php
include_once 'connect.php';
$result = mysqli_query($mysqli,"SELECT * FROM negara");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Delete Data Negara</title>
</head>
<body>
<table border="2">
	<tr>
	<td>id Negara</td>
	<td>nama Negara</td>
	<td>Action</td>
	</tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
	<td><?php echo $row["id_negara"]; ?></td>
	<td><?php echo $row["nama_negara"]; ?></td>
	<td><a href="deleteprosesnegara.php?id_negara=<?php echo $row["id_negara"]; ?>">Delete</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
</body>
</html>