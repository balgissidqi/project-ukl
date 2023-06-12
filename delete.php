<?php
$databaseHost = "localhost";
$databasename = "kuliner";
$databaseusername = "root";
$databasepassword = "";

$mysqli = mysqli_connect($databaseHost, $databaseusername, $databasepassword, $databasename);

if (!$mysqli) {
    die("koneksi gagal : " . mysqli_connect_error());
} else {
    echo "koneksi berhasil";
}
$result = mysqli_query($mysqli,"SELECT * FROM resep");
?>

<!DOCTYPE html>
<html>
<head>
<title>Hapus Data Resep</title>
</head>
<body>
<table border="1" >
	<tr>
	<td>id_resep</td>
	<td>alat_dan_bahan</td>
	<td>cara_masak</td>
	</tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
	<td><?php echo $row["id_resep"]; ?></td>
	<td><?php echo $row["alat_dan_bahan"]; ?></td>
	<td><?php echo $row["cara_masak"]; ?></td>
	<td><a href="prosesdelete.php?id_resep=<?php echo $row["id_resep"]; ?>">Delete</a></td>
	</tr>
	<?php
	?>
</table>
</body>
</html>
