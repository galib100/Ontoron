

<?php
session_start();
include_once 'inc/header.php';

include_once 'Includes/dbh.inc.php'


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <div class="text-center  ">




 <table class="table table-dark table-striped table-hover">
   <tr>
  <th> id </th>
  <th> Name</th>
  <th> blood </th>
   <th> phone </th>
  <th> Location</th>
  <th></th>
  <th></th>
   </tr>

   <?php
 $sql = " SELECT * FROM donar;";
 $result = mysqli_query($conn, $sql);
 $resultCheck = mysqli_num_rows($result);
?>
<?php
$count = 1;

if ($resultCheck >0 ) {
while ($row = mysqli_fetch_assoc($result)) {
?>
<tr>
  <td><?php echo  $count?> </td>
  <td><?php echo $row['name']; ?> </td>
  <td><?php echo $row['blood_group']; ?> </td>
  <td><?php echo $row['phone']; ?> </td>
  <td><?php echo $row['district']; ?> </td>
  <!-- <td><a href="edit.php" class="btn btn-danger" > Edit</a> </td> -->




 </td>
</tr>
<tr>
  <td></td>
</tr>
<?php
$count ++;
}
}
?>
<?php

 ?>
</table>
 </div>
</body>
</html>
