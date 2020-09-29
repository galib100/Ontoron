<?php
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

    <section class="search_field">
      <div class="">

      <div class="container">
        <form class="" action="find.php" method="post">


      <div class="form-group">
        <label class="lead" for="search">search the blood group</label>
        <div class="input-group mb-2 ">
              <div class="input-group-text input-group-prepend">
                <span class="fa fa-search"></span>
              </div>
              <input class="form-control" type="text" name="search" placeholder=" eg:A+,A-,O+,O-,AB+,AB-,B+,B-">

        </div>
        <button class="btn btn-danger" type="submit" name="submit_search">Search</button>
      </div>
      </form>
      </div>
    </div>
    </section>

    <section>

        <?php
      if (isset($_POST['submit_search'])) {
?>
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

      $search = mysqli_real_escape_string($conn,$_POST['search']);

      $sql = "SELECT * FROM donar WHERE blood_group Like '%$search%';";

      $result = mysqli_query($conn,$sql);
      $resultCheck = mysqli_num_rows($result);

      if ($resultCheck> 0) {
         while ($row = mysqli_fetch_assoc($result)) {
          ?>
          <tr>
           <td><?php echo $row['id']; ?> </td>
           <td><?php echo $row['name']; ?> </td>
           <td><?php echo $row['blood_group']; ?> </td>
           <td><?php echo $row['phone']; ?> </td>
           <td><?php echo $row['district']; ?> </td>
          </tr>

          <?php
         }
      }

      }
       ?>
      </table>

    </section>

  </body>
</html>
