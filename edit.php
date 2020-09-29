

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
    <h3>What do you want to change?</h3>
  <h5 class="text-danger">(You fill both changed and Unchanged thing)</h5>
  <p class="alert alert-danger">  <?php if (empty($_POST['c_name'])|| empty($_POST['c_phone']) || empty($_POST['c_blood_group']) || empty($_POST['c_district'])|| empty($_POST['c_pwd']) || empty($_POST['new_pwd'])) {
    echo "Your must fill the box!!";

  } ?> </p>

  <form class="form-group" action="edit.inc.php" method="POST">

    <input class="form-control mb-2" type="text" class="form-" name="c_name" value="" placeholder="Your Name" required>

    <input class="form-control mb-2" type="text" class="form-" name="c_phone" value="" placeholder="Your Phone" required>

    <input class="form-control mb-2" type="text" class="form-" name="c_blood_group" value="" placeholder="Your Blood Group" required>

    <input class="form-control mb-2" type="text" class="form" name="c_district" value="" placeholder="Your Location" required>

    <input class="form-control mb-2" type="password" name="c_pwd" placeholder="Your previous Password" required>

    <input class="form-control mb-2" type="password" name="new_pwd" placeholder="Set New Password" required> <br>

    <button type="submit" class="btn btn-primary btn-block" name="submit">Change</button>
  </form>

  

  </body>
</html>
