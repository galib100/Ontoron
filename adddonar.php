 <?php
 include_once 'inc/header.php';
 $name  = $phone = $blood_group = $district = $password = " ";
 $nameErr  = $phoneErr = $blood_groupErr = $districtErr = $passwordErr = "";

 ?>
 <?php
 include_once 'Includes/dbh.inc.php';

 if (isset($_POST['submit'])) {
    if (empty($_POST['name'])) {
      $nameErr = "Name is required";
    }
    else {
      $name = test_input(mysqli_real_escape_string($conn,$_POST['name']));
      if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
         $nameErr = "Only letters and white space allowed";
      }
    }
    if (empty($_POST['phone'])) {
     $phoneErr = "phone is required";
    }
   else {
     $phone = test_input(mysqli_real_escape_string($conn,$_POST['phone']));

     if (! preg_match('/^[0-9]{11}+$/',$phone)) {
     $phoneErr= "Unvalid phone Number";
     }
   }
   if (empty($_POST['blood_group'])) {
     $blood_groupErr = "blood Group is required";
   }
   else {
   $blood_group = test_input(mysqli_real_escape_string($conn,$_POST['blood_group']));
   }

   if (empty($_POST['district'])) {
     $blood_groupErr = "Location is required";
   }
   else {
     $district = test_input(mysqli_real_escape_string($conn,$_POST['district']));
   }

   if (empty($_POST['name'])) {
     $nameErr = "password is required";
   }
   else {
   $password = test_input(mysqli_real_escape_string($conn,$_POST['pwd']));
     if (!preg_match("/^[a-zA-Z ]*$/",$password)) {
        $passwordErr = "Only letters and white space allowed";
     }
   }
   $sql = "INSERT INTO donar (name,phone,blood_group,district,password) VALUES(?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)) {
      echo "SQL error ";

    }else {
      mysqli_stmt_bind_param($stmt,"sssss",$name,$phone,$blood_group,$district,$password);
       mysqli_stmt_execute($stmt);

    }
    header("Location:adddonar.php?add=success");
 }
 function test_input($data)
 {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }

 // $name = mysqli_real_escape_string($conn,$_POST['name']);
 // $phone = mysqli_real_escape_string($conn,$_POST['phone']);
 // $blood_group = mysqli_real_escape_string($conn,$_POST['blood_group']);
 // $district = mysqli_real_escape_string($conn,$_POST['district']);
 // $password = mysqli_real_escape_string($conn,$_POST['pwd']);


?>

<section class="addpic">
  <div class="dark-overly">
  <div class="container pb-lg-3 pb-sm-0">
    <img class="img-fluid "  src="img/add-donar-1.jpg" alt="">


  </div>
  </div>
</section>

    <section id= "AddSection" class="pb-4 adddonar">
      <div class="dark-overly">


      <div class="container ">


      <form class="form-group" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

        <div class="input-group mb-2 ">
          <div class="input-group-text input-group-prepend">
            <span class="fa fa-user"></span>
          </div>
          <input class="form-control" type="text" class="form-" name="name"  placeholder="Your Name" required>
        </div>

        <span class="error text-right"> <?php echo  $nameErr; ?> </span>

        <div class="input-group mb-2 ">
          <div class="input-group-text input-group-prepend">
            <span class="fa fa-phone"></span>
          </div>
            <input class="form-control " type="text" class="form-" name="phone" placeholder="Your Phone" required>
        </div>


        <span class="error"> <?php echo  $phoneErr; ?> </span>

        <div class="input-group mb-2 ">
          <div class="input-group-text input-group-prepend">
            <span class="fa fa-heartbeat"></span>
          </div>
              <input class="form-control " type="text" class="form-" name="blood_group" placeholder="Your Blood Group" maxlength="3"required />
        </div>
        <span class="error"> <?php echo  $blood_groupErr; ?> </span>

        <!-- <div class="form-group">
          <label for="blood_group">Your blood Group:</label>
        <select id="blood_group" class="form-control" placeholder="blood group" name="blood_group">
          <option value="">A+</option>
          <option value="">A-</option>
          <option value="">O+</option>
          <option value="">O-</option>
          <option value="">AB+</option>
          <option value="">B+</option>
          <option value="">B-</option>
          <option value="">AB-</option>
        </select>
        </div> -->
        <div class="input-group mb-2 ">
              <div class="input-group-text input-group-prepend">
                <span class="fa fa-location-arrow"></span>
              </div>
              <input class="form-control" type="text" class="form" name="district" value="" placeholder="Your Location" required>
        </div>
        <span class="error"> <?php echo  $districtErr ; ?> </span>
        <div class="input-group">
              <div class="input-group-text input-group-prepend">
                <span class="fa fa-lock"></span>
              </div>
              <input class="form-control" type="password" name="pwd" placeholder="Set Password" required>
        </div>
        <span class="text-danger"><?php echo $passwordErr; ?> </span>


        <button type="submit" class="btn btn-primary btn-block" name="submit"> Be a Donar</button>
      </form>

        </div>
      </div>
    </section>

  </body>
</html>

 <?php

 include_once 'inc/footer.php';

 ?>
