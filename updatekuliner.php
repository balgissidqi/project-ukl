<?php
include_once 'connect.php';

$result = mysqli_query($mysqli, "SELECT * FROM kuliner");
?>

<!DOCTYPE html>
<html>
<head>
   <title>Kuliner Update</title>
</head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
   <table border="2">
      <tr>
         <td>id_kuliner</td>
         <td>nama_kuliner</td>
         <td>Action</td>
      </tr>
      <?php
      $i = 0;
      while ($row = mysqli_fetch_array($result)) {
      ?>
         <tr>
            <td><?php echo $row["id_kuliner"]; ?></td>
            <td><?php echo $row["nama_kuliner"]; ?></td>
            <td><a href="updateproseskuliner.php?id_kuliner=<?php echo $row["id_kuliner"]; ?>">Update</a></td>
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
