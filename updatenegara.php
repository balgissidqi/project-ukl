<?php
include_once 'connect.php';

$result = mysqli_query($mysqli, "SELECT * FROM negara");
?>

<!DOCTYPE html>
<html>
<head>
   <title>Negara Update</title>
</head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
   <table border="2">
      <tr>
         <td>id_negara</td>
         <td>nama_negara</td>
         <td>Action</td>
      </tr>
      <?php
      $i = 0;
      while ($row = mysqli_fetch_array($result)) {
      ?>
         <tr>
            <td><?php echo $row["id_negara"]; ?></td>
            <td><?php echo $row["nama_negara"]; ?></td>
            <td><a href="updateprosesnegara.php?id_negara=<?php echo $row["id_negara"]; ?>">Update</a></td>
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
