<?php
include_once 'connect.php';

$result = mysqli_query($mysqli, "SELECT * FROM kota");
?>

<!DOCTYPE html>
<html>
<head>
   <title>Kota Update</title>
</head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
   <table border="2">
      <tr>
         <td>id_kota</td>
         <td>nama_kota</td>
         <td>Action</td>
      </tr>
      <?php
      $i = 0;
      while ($row = mysqli_fetch_array($result)) {
      ?>
         <tr>
            <td><?php echo $row["id_kota"]; ?></td>
            <td><?php echo $row["nama_kota"]; ?></td>
            <td><a href="updateproses.php?id_kota=<?php echo $row["id_kota"]; ?>">Update</a></td>
         </tr>
      <?php
         $i++;
      }
      ?>
   </table>
<?php
} else {
   echo "No result found";
}
?>
</body>
</html>
